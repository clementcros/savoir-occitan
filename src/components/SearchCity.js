import React from 'react'
import PropTypes from 'prop-types'
import { FormGroup, FormControl, ControlLabel } from 'react-bootstrap'


class SearchCity extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			fieldValue: ''
		}
	}

	handleOnChange(event) {
		this.setState({fieldValue: event.target.value});
	}

	render() {
		return (
			<FormGroup>
				<ControlLabel>Ville</ControlLabel>
				<FormControl 
					type="text"
					value={this.state.fieldValue}
					placeholder="Choisissez une autre ville -- NON FONCTIONNEL"
					onChange={(event) => {this.handleOnChange(event)}}
				/>
			</FormGroup>
		)	
	}
}


SearchCity.propTypes = {
	
}


export default SearchCity;