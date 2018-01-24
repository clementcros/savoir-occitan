import React from 'react'
import PropTypes from 'prop-types'


class FilterSlider extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			min: 0,
			max: 1000,
			value: 20
		}
	}

	handleOnChange(event) {
		this.setState({value: event.target.value});
	}

	render() {
		return (
			<div>
				{this.state.min} &lt; {this.state.value} &lt; {this.state.max}
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


// const FilterSlider = ({name}) => (
// 	<input 
// 		type="range"
// 		min={0}
// 		max={1000}
// 		on
// 	/>
// )


FilterSlider.propTypes = {
	
}


export default FilterSlider;