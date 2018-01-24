import React from 'react'
import PropTypes from 'prop-types'
import { FormGroup, FormControl, ControlLabel } from 'react-bootstrap'


class FilterInput extends React.Component {
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
				<FormControl 
					type="text"
					value={this.state.fieldValue}
					placeholder={this.props.text}
					onChange={(event) => this.handleOnChange(event)}
				/>
			</FormGroup>
		);
	}
}


FilterInput.propTypes = {
	
}


export default FilterInput;