import { call, put, takeEvery } from 'redux-saga/effects'

import { FETCH_DATA, FETCH_DATA_SUCCESS, FETCH_DATA_FAILURE } from './actionsSaga'
import get from './api/get'


function* fetchData(action) {
	try {
		console.log('watching');
		const url = "http://www.sitebetatest.fr/index.php/json/result/32";
		//const param = action.id;
		const data = yield call(get, url);

		yield put({type: FETCH_DATA_SUCCESS, data});
	} catch (e) {
		yield put({type: FETCH_DATA_FAILURE, msg: "failed to load data"});
	}
}


function* watchFetchData() {
  	yield takeEvery(FETCH_DATA, fetchData);
}

export default watchFetchData;