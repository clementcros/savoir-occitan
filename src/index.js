import React from 'react'
import { render } from 'react-dom'
import { Provider } from 'react-redux'
import { createStore, applyMiddleware } from 'redux'
import createSagaMiddleware from 'redux-saga'

import AppLink from './containers/AppLink'
import reducer from './reducers/reducer'
import rootSaga from './sagas/rootSaga'

const sagaMiddleware = createSagaMiddleware()
const store = createStore(
	reducer,
	applyMiddleware(sagaMiddleware)
)

sagaMiddleware.run(rootSaga)

render(
	<Provider store={store}>
		<AppLink />
	</Provider>,
	document.getElementById('root')
);