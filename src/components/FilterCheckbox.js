import React from 'react'
import PropTypes from 'prop-types'
import { Checkbox } from 'react-bootstrap'


const FilterCheckbox = ({name}) => (
	<li>
		<Checkbox>{name}</Checkbox>
	</li>
)


FilterCheckbox.propTypes = {
	
}


export default FilterCheckbox;