import React from 'react'
import PropTypes from 'prop-types'
import { Panel, ListGroup, ListGroupItem, Glyphicon } from 'react-bootstrap'


const putStar = (note) => {
	let stars = [];
	for (let i = 0; i < 5; i++) {
		if (i < note) {
			stars.push(<Glyphicon key={i} glyph="star"/>)
		} else {
			stars.push(<Glyphicon key={i} glyph="star-empty"/>)
		}
	}
	return stars;
}


const Product = ({categories, product}) => {
	let category = "";
	categories.forEach((cat) => {
		if (cat.id === product.id_category) {
			category = cat.type;
		}
	});	
	return (
		<Panel>
			<Panel.Heading>Image</Panel.Heading>
			<Panel.Body>{product.name}</Panel.Body>
			<ListGroup>
				<ListGroupItem>{category}</ListGroupItem>
				<ListGroupItem>{product.desc}</ListGroupItem>
				<ListGroupItem>{product.price}</ListGroupItem>
			</ListGroup>
			<Panel.Body>
				{putStar(product.note)}
			</Panel.Body>
		</Panel>
	)
}



Product.propTypes = {

}


export default Product;