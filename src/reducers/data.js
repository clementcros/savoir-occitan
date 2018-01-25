import { INIT_DATA } from '../actions/actions'


const initialData = {
	cities: [],
	clients: [],
	products: [],
	categories: []
}


const formatData = (data) => {
	let ret = data;
	if (ret === []) {
		ret = initialData;
	} else {
		ret.products = data.products? data.products: [];
		ret.categories = data.categories? data.categories: [];
	}
	return ret;
}


const data = (state = initialData, action) => {
	console.log('action : ' + action.type);
	switch(action.type) {
		case INIT_DATA:
			return formatData(action.data);
		default:
			return state;
	}
}

export default data;