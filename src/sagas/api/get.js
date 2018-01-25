import request from 'superagent'


const get = ({url, param}) => {
	return request
		.post('http://occitan.my/index.php/json/result/32')
		//.get('../src/data.json')
		// .query({ query: 'Manny' })
		// .query({ range: '1..5' })
		// .query({ order: 'desc' })
		.then((data) => {
			console.log('on passe dans le then du get');
			console.log('data dans get : ' + JSON.stringify(data.body, null, 4));
			return data.body;
	});
}

export default get;