export const INIT_DATA = 'INIT_DATA'

export const FILTER_PRODUCTS_CHANGE = 'FILTER_PRODUCTS_CHANGE'


export const initData = (data) => {
	return {
		type: INIT_DATA,
		data,
	}
}


export const filterProductsChange = (products, filter) => {
	return {
		type: FILTER_PRODUCTS_CHANGE,
		products,
		filter
	}
}