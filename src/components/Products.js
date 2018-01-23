import React from 'react'
import PropTypes from 'prop-types'
import { Grid, Row, Col } from 'react-bootstrap'

import Product from '../components/Product'


const createProductsTable = (products) => {
	let productsTable = [];
	let rowTable = [];
	let i = 0;
	for (i = 0; i < products.length; i++) {
		rowTable.push(products[i]);
		if (i !== 0 && i % 3 === 2) {
			productsTable.push(rowTable);
			rowTable = [];
		}
	}
	if (rowTable.length > 0) {
		productsTable.push(rowTable);
	}
	return productsTable;
}


const Products = ({categories, products}) => {
	const productsTable = createProductsTable(products);
	let i = 0;
	return (
		<Grid>
			{productsTable.map((row) => (
				<Row key={i++}>
					{row.map((prod) => (
						<Col md={3} key={prod.id}>
							<Product
								key={prod.id}
								product={prod}
								categories={categories}
							/>
						</Col>
					))}
				</Row>
			))}
		</Grid>
	);
}


Products.propTypes = {

}


export default Products;