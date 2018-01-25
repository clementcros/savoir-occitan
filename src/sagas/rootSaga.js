import { takeEvery } from 'redux-saga/effects'

import { FETCH_DATA } from './actionsSaga'
import watchFetchData from './watchFetchData'


function* rootSaga() {
  	yield takeEvery(FETCH_DATA, watchFetchData);
}

export default rootSaga;