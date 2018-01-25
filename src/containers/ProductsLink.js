import { connect } from 'react-redux'
import Products from '../components/Products'


const mapStateToProps = (state, props) => {
	return {
		products: state.currentProducts.products,
		categories: state.data.categories
	}
}


const mapDisplayToProps = (display, props) => {
	return {
		
	}
}


const ProductsLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(Products)

export default ProductsLink;