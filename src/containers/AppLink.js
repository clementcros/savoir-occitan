import { connect } from 'react-redux'

import App from '../components/App'
import { initData } from '../actions/actions'
import { FETCH_DATA } from '../sagas/actionsSaga'


const mapStateToProps = (state, props) => {
	return {

	}
}


const mapDisplayToProps = (dispatch, props) => {
	return {
		onInit: () => {
			//dispatch(initData(data));
			dispatch({type: FETCH_DATA});
		}
	}
}


const AppLink = connect(
	mapStateToProps,
	mapDisplayToProps
)(App)

export default AppLink;


/*
	supprimer id_label et remplacer par un tableau contenant tous les labels avec chaque label associé sinon nb label etant inconnu
	on va avoir trop de liaison/field incontrolable
*/

const data = {
    "products": [
        {
            "id": "2",
            "name": "paté en croute",
            "id_client": "1",
            "id_city": "32",
            "describe": "<p>\r\n\tun bon pat&eacute; en croute de mes couilles</p>\r\n",
            "img_1": "9bbbe-telecharge.jpg",
            "img_2": "cea01-4256.jpg",
            "img_3": "eec0e-i12176-pate-de-faisan-facile.jpg",
            "id_category": "1",
            "price": "25",
            "special_offer": "y'en a pas",
            "note": "4"
        },
        {
            "id": "4",
            "name": "le produit",
            "id_client": "1",
            "id_city": "32",
            "describe": "<p>\r\n\tvoici le produit qui d&eacute;fonce</p>\r\n",
            "img_1": "658a0-4256.jpg",
            "img_2": null,
            "img_3": null,
            "id_category": "1",
            "price": "25",
            "special_offer": "1 acheter 1 offert !",
            "note": "2"
        },
        {
            "id": "5",
            "name": "saucisson",
            "id_client": "1",
            "id_city": "32",
            "describe": "<p>\r\n\t<span style=\"font-family: arial, sans-serif; font-size: 16px;\">La garniture est g&eacute;n&eacute;ralement compos&eacute;e de deux tiers &agrave; trois quarts de viande maigre et d&#39;un quart &agrave; un tiers de gras (issu principalement de lard dorsal du porc, appel&eacute; bardi&egrave;re).</span></p>\r\n",
            "img_1": "a7999-images.jpg",
            "img_2": null,
            "img_3": null,
            "id_category": "1",
            "price": "30",
            "special_offer": "1 acheté le deuxième payant",
            "note": "3"
        },
        {
            "id": "6",
            "name": "VIN rouge ",
            "id_client": "1",
            "id_city": "32",
            "describe": "<p>\r\n\tvenez savourez notre nouveau c&eacute;page de l&#39;ann&eacute;e 2016 au comptoir du pochtron.</p>\r\n",
            "img_1": "48f98-vins-terrasses-du-larzac-caves-paul-riquet-beziers-1100x729.jpg",
            "img_2": null,
            "img_3": null,
            "id_category": "2",
            "price": "12",
            "special_offer": null,
            "note": "5"
        }
    ],
    "categories": [
        {
            "id": "1",
            "type": "Charcuterie"
        },
        {
            "id": "2",
            "type": "vin"
        }
    ],
    "city": [
        {
            "id": "32",
            "code_post": "34500",
            "name": "Béziers",
            "img_1": "2dfa7-xvm8f995910-f751-11e6-b182-27a8794d746f-805x453.jpg",
            "img_2": "9cc63-beziers.jpg",
            "img_3": "981ea-marc-gerard-photography-cathedrale-st-nazaire-beziers-3-1024x682.jpg"
        }
    ]
}