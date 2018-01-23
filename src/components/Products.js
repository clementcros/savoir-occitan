import React from 'react'
import PropTypes from 'prop-types'
import { Grid, Row, Col } from 'react-bootstrap'

import Product from '../components/Product'


const Products = ({products}) => {
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
	return (
		<Grid>
			{productsTable.map((row) => (
				<Row>
					{row.map((prod) => (
						<Col md={3}>
							<Product
								key={prod.id}
								product={prod}
							/>
						</Col>
					))}
				</Row>
			))}
		</Grid>
	);
}


// const Products = ({products}) => {
	
// 	return (<div>
// 		{products.map((prod) => (
// 			<Product 
// 				key={prod.id}
// 				product={prod}
// 			/>
// 		))}
// 	</div>)
// }



Products.propTypes = {

}


export default Products;