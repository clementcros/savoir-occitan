import React from 'react'
import PropTypes from 'prop-types'
import { FormGroup, FormControl, ControlLabel } from 'react-bootstrap'


class FilterProductsInput extends React.Component {
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
					placeholder={this.props.placeholder}
					onChange={(event) => this.handleOnChange(event)}
				/>
			</FormGroup>
		);
	}
}


FilterProductsInput.propTypes = {
	
}


export default FilterProductsInput;