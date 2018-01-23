import React from 'react'
import PropTypes from 'prop-types'
import { Panel, ListGroup, ListGroupItem } from 'react-bootstrap'


const Product = ({product}) => (
	<Panel>
		<Panel.Heading>Image</Panel.Heading>
		<Panel.Body>{product.name}</Panel.Body>
		<ListGroup>
			<ListGroupItem>{product.category}</ListGroupItem>
			<ListGroupItem>{product.desc}</ListGroupItem>
			<ListGroupItem>{product.prix}</ListGroupItem>
		</ListGroup>
		<Panel.Body>Note : </Panel.Body>
	</Panel>
)



Product.propTypes = {

}


export default Product;