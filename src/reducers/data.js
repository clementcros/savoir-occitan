import { INIT_DATA } from '../actions/actions'


const data = (state = [], action) => {
	switch(action.type) {
		case INIT_DATA:
			return action.data;
		default:
			return state;
	}
}

export default data;