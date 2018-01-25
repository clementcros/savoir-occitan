import { call, put } from 'redux-saga/effects'

import get from './api/get'
import {
	FETCH_DATA_FETCH_SUCCESS,
	FETCH_DATA_FETCH_FAILURE
} from './actionsSaga'


function* watchFetchData(action) {
	try {
		console.log('watching');
		const url = "http://www.sitebetatest.fr/index.php/json/result/32";
		//const param = action.id;
		const data = yield call(get, url);
		yield put({type: FETCH_DATA_FETCH_SUCCESS, msg: "successed to load data"});
	} catch (e) {
		yield put({type: FETCH_DATA_FETCH_FAILURE, msg: "failed to load data"});
	}
}

export default watchFetchData;