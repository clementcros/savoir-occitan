import { connect } from 'react-redux'
import SearchCity from '../components/SearchCity'


const mapStateToProps = (state, props) => {
	return {
		
	}
}


const mapDisplayToProps = (display, props) => {
	return {
		
	}
}


const SearchCityLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(SearchCity)

export default SearchCityLink;