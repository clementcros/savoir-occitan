import React from 'react'
import PropTypes from 'prop-types'
import { Label } from 'react-bootstrap'

import FilterProductsInput from './FilterProductsInput'
import FilterProductsCheckbox from './FilterProductsCheckbox'
import FilterProductsSlider from './FilterProductsSlider'
import FilterProductsNote from './FilterProductsNote'


const FiltersProducts = ({products, categories, currentProducts, onChangeFilter}) => (
	<div>
		<Label>Nom</Label>
		<FilterProductsInput
			onChangeFilter={onChangeFilter}
			placeholder="NON FONCTIONNEL"
		/>

		<Label>Catégories</Label>
		<ul>
			{categories.map((cat) => (
				<FilterProductsCheckbox 
					key={cat.id}
					products={products}
					currentProducts={currentProducts.products}
					onChangeFilter={onChangeFilter}
					name={cat.type}
					id={cat.id}
				/>
			))}
		</ul>

		<Label>Prix</Label>
		<FilterProductsSlider
			products={products}
			price={currentProducts.filter.price}
			onChangeFilter={onChangeFilter}
		/>

		<Label>Note</Label>
		<FilterProductsNote
			products={products}
			onChangeFilter={onChangeFilter}
		/>
	</div>
)


FiltersProducts.propTypes = {
	
}


export default FiltersProducts;