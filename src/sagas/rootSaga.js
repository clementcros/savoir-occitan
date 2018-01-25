import { fork } from 'redux-saga/effects'

import watchFetchData from './watchFetchData'


function* rootSaga() {
  	yield fork(watchFetchData)
}

export default rootSaga;