import request from 'superagent'


const get = ({url, param}) => {
	request
		.get('http://www.sitebetatest.fr/index.php/json/result/32')
		// .query({ query: 'Manny' })
		// .query({ range: '1..5' })
		// .query({ order: 'desc' })
		.then(function(data) {
			console.log('hello');
	});
}

export default get;