import { INIT_DATA, FILTER_PRODUCTS_CHANGE } from '../actions/actions'
import { FETCH_DATA_SUCCESS } from '../sagas/actionsSaga'


const initialFilter = {
	name: "",
	category: [],
	price: 50,
	note: -1
}


const initialData = {
	products: [],
	filter: initialFilter
}


const applyFilter = (products, filter) => {
	let ret = products; //data.products
	//filter by category
	if (filter.category.length > 0) {
		ret = ret.filter((prod) => {
			let test = false;
			filter.category.map((catId) => {
				if (prod.id_category === catId) {
					test = true;
				}
			})
			return test;
		});
	}

	//filter by price
	ret = ret.filter((prod) => {
		return Number(prod.price) <= Number(filter.price);
	});

	//filter by note
	ret = ret.filter((prod) => {
		return Number(prod.note) >= Number(filter.note);
	});
	return ret;
}


const formatFilter = (filter, oldFilter) => {
	switch(filter.type) {
		case "category":
			let newFilter = oldFilter;
			//case checkbox off -> on
			if (filter.isChecked) {
				newFilter.category.push(filter.id);
			} 
			//case checkbox on -> off
			else {
				newFilter.category = newFilter.category.filter((cbId) => {
					return cbId !== filter.id;
				});
			}
			return newFilter;
		case "price":
			return Object.assign({}, oldFilter, {
				price: filter.price
			});
		case "note":
			return Object.assign({}, oldFilter, {
				note: filter.note
			});
		default:
			return oldFilter;
	}
}


const currentProducts = (state = initialData, action) => {
	switch(action.type) {
		case INIT_DATA:
			return {
				products: action.data.products,
				filter: initialFilter
			}
		case FETCH_DATA_SUCCESS:
			return {
				products: action.data.products,
				filter: initialFilter
			}
		case FILTER_PRODUCTS_CHANGE:
			const newFilter = formatFilter(action.filter, state.filter);
			return {
				products: applyFilter(action.products, newFilter),
				filter: newFilter
			}
		default:
			return state;
	}
}

export default currentProducts;