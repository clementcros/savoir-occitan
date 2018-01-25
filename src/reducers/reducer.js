import { combineReducers } from 'redux'

import data from './data'
import currentProducts from './currentProducts'


const reducer = combineReducers({
	data,
	currentProducts
})

export default reducer;