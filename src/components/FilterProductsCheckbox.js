import React from 'react'
import PropTypes from 'prop-types'
import { Checkbox, Badge } from 'react-bootstrap'


//&#8239;


const FilterProductsCheckbox = ({products, currentProducts, name, id, onChangeFilter}) => {
	const facet = currentProducts.filter((prod) => {
		return prod.id_category === id;
	}).length;
	return (
		<li>
			<Checkbox
				onChange={(event) => {
					onChangeFilter(products, {type: "category", id, isChecked: event.target.checked});
				}}
			>
				{name}
				<Badge>{facet}</Badge>
			</Checkbox>
		</li>
	);
}


FilterProductsCheckbox.propTypes = {
	
}


export default FilterProductsCheckbox;