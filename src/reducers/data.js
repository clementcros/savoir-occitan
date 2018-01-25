import { INIT_DATA } from '../actions/actions'
import { FETCH_DATA_SUCCESS } from '../sagas/actionsSaga'


const initialData = {
	cities: '',
	clients: [],
	products: [],
	categories: []
}


const formatData = (data) => {
	let ret = data;
	ret.products = data.products? data.products: [];
	ret.categories = data.categories? data.categories: [];
	return ret;
}


const data = (state = initialData, action) => {
	console.log('action : ' + action.type);
	switch(action.type) {
		case INIT_DATA:
			return formatData(action.data);
		case FETCH_DATA_SUCCESS:
			return formatData(action.data);
		default:
			return state;
	}
}

export default data;