import React from 'react'
import PropTypes from 'prop-types'
import { Glyphicon } from 'react-bootstrap'


class FilterProductsInput extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			numberOfStars: 3
		}
	}

	handleOnChange(event) {
		this.setState({numberOfStars: event.target.dataset.number});
		this.props.onChangeFilter(this.props.products, {type: "note", note: event.target.dataset.number});
	}

	render() {
		let stars = [];
		for (let i = 0; i < 5; i++) {
			if (i < this.state.numberOfStars) {
				stars.push(<Glyphicon key={i} data-number={i+1} onClick={(event) => this.handleOnChange(event)} glyph="star"/>)
			} else {
				stars.push(<Glyphicon key={i} data-number={i+1} onClick={(event) => this.handleOnChange(event)} glyph="star-empty"/>)
			}
		}
		return (
			<div>
				{stars}
			</div>
		);
	}
}


FilterProductsInput.propTypes = {
	
}


export default FilterProductsInput;