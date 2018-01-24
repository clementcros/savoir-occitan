import React from 'react'
import PropTypes from 'prop-types'
import { Label } from 'react-bootstrap'

import FilterInput from './FilterInput'
import FilterCheckbox from './FilterCheckbox'
import FilterSlider from './FilterSlider'


const Filters = ({products, categories}) => (
	<div>
		<Label>Nom</Label>
		<FilterInput
			text="Nom d'un produit"
		/>

		<Label>Catégories</Label>
		<ul>
			{categories.map((cat) => (
				<FilterCheckbox 
					key={cat.id}
					name={cat.type}
				/>
			))}
		</ul>

		<Label>Prix</Label>
		<FilterSlider />

		<Label>Note</Label>
		<FilterInput />
	</div>
)


Filters.propTypes = {
	
}


export default Filters;