import React from 'react'
import { Grid, Row, Col } from 'react-bootstrap'

import SearchCityLink from '../containers/SearchCityLink'
import FilterLink from '../containers/FilterLink'
import ProductsLink from '../containers/ProductsLink'


class App extends React.Component {
	// constructor(props) {
	// 	super(props);
	// }

	componentDidMount() {
		this.props.onInit();
	}

	render() {
		return (
			<Grid>
				<Row className="Search-City">
					<Col md={6}>
						<SearchCityLink />
					</Col>
				</Row>
				<Row className="Products-Actions">
					<Col md={2}>
						<FilterLink />
					</Col>
					<Col md={10}>
						<ProductsLink />
					</Col>
				</Row>
			</Grid>
		);
	}
}


// const App = () => (
// 	<Grid>
// 		<Row className="Search-City">
// 			<Col md={6}>
// 				<SearchCityLink />
// 			</Col>
// 		</Row>
// 		<Row className="Products-Actions">
// 			<Col md={2}>
// 				<FilterLink />
// 			</Col>
// 			<Col md={10}>
// 				<ProductsLink />
// 			</Col>
// 		</Row>
// 	</Grid>
// )

export default App;