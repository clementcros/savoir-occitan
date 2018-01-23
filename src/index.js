import React from 'react'
import { render } from 'react-dom'
import { Provider } from 'react-redux'
import { createStore } from 'redux'

import AppLink from './containers/AppLink'
import reducer from './reducers/reducer'


let store = createStore(reducer)

render(
	<Provider store={store}>
		<AppLink />
	</Provider>,
	document.getElementById('root')
);