import { connect } from 'react-redux'

import FiltersProducts from '../components/FiltersProducts'
import { filterProductsChange } from '../actions/actions'


const mapStateToProps = state => {
	return {
		products: state.data.products,
		categories: state.data.categories,
		currentProducts: state.currentProducts
	}
}


const mapDisplayToProps = dispatch => {
	return {
		onChangeFilter: (products, filter) => {
			dispatch(filterProductsChange(products, filter));
		}
	}
}


const FiltersProductsLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(FiltersProducts)

export default FiltersProductsLink;