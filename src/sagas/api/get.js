import request from 'superagent'


const get = ({url, param}) => {
	return request
		.get('http://occitan.my/index.php/json/result/32')
		// .query({ order: 'desc' })
		.then((data) => {
			return data.body;
	});
}

export default get;