import { connect } from 'react-redux'
import Filter from '../components/Filter'


const mapStateToProps = (state, props) => {
	return {

	}
}


const mapDisplayToProps = (display, props) => {
	return {
		
	}
}


const FilterLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(Filter)

export default FilterLink;