import React from 'react'
import PropTypes from 'prop-types'


class FilterProductsSlider extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			min: 0,
			max: 100,
			value: this.props.price
		}
	}

	handleOnChange(event) {
		const price = event.target.value;
		this.setState({value: price});
		this.props.onChangeFilter(this.props.products, {type: "price", price });
	}

	render() {
		return (
			<div>
				{this.state.min} &lt; prix &lt;= {this.state.value}
				<input 
					type="range"
					min={this.state.min}
					max={this.state.max}
					value={this.state.value}
					onChange={(event) => this.handleOnChange(event)}
				/>
				<br />
			</div>
		);
	}
}


FilterProductsSlider.propTypes = {
	
}


export default FilterProductsSlider;