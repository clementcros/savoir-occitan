import { connect } from 'react-redux'
import Filters from '../components/Filters'


const mapStateToProps = (state, props) => {
	return {
		products: state.data.products,
		categories: state.data.categories
	}
}


const mapDisplayToProps = (display, props) => {
	return {
		
	}
}


const FilterLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(Filters)

export default FilterLink;