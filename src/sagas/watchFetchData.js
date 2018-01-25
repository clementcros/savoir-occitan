import { call, put, takeEvery } from 'redux-saga/effects'

import { FETCH_DATA, FETCH_DATA_FETCH_SUCCESS, FETCH_DATA_FETCH_FAILURE } from './actionsSaga'
import get from './api/get'


//import { delay } from 'redux-saga'


function* fetchData(action) {
	try {
		console.log('watching');
		const url = "http://www.sitebetatest.fr/index.php/json/result/32";
		//const param = action.id;
		const data = yield call(get, url);
 
		//yield delay(3000);

		console.log('data stringify dans watch : ' + JSON.stringify(data, null, 4));
		console.log('data dans watch : ' + data);
		yield put({type: FETCH_DATA_FETCH_SUCCESS, data: data});
	} catch (e) {
		yield put({type: FETCH_DATA_FETCH_FAILURE, msg: "failed to load data"});
	}
}


function* watchFetchData() {
  	yield takeEvery(FETCH_DATA, fetchData);
}

export default watchFetchData;