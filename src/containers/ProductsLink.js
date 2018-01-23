import { connect } from 'react-redux'
import Products from '../components/Products'


const mapStateToProps = (state, props) => {
	//const products = state.data.products? state.data.products: [];
	//const categories = state.data.categories? state.data.categories: [];
	return {
		categories: state.data.categories,
		products: state.data.products
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