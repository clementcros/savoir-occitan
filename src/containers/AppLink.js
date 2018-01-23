import { connect } from 'react-redux'

import App from '../components/App'
import { initData } from '../actions/actions'


const mapStateToProps = (state, props) => {
	return {

	}
}


const mapDisplayToProps = (dispatch, props) => {
	return {
		onInit: () => {
			dispatch(initData(data))
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
	"cities": [
		{
			"id": "-1",
			"name": "Bassan",
			"code_post": "XXXXX",
			"id_back": "0"
		},
		{
			"id": "-2",
			"name": "Lieuran",
			"code_post": "XXXXX",
			"id_back": "0"
		},
		{
			"id": "-3",
			"name": "Sérignan",
			"code_post": "XXXXX",
			"id_back": "0"
		},
		{
			"id": "-4",
			"name": "Valras",
			"code_post": "XXXXX",
			"id_back": "0"
		},
		{
			"id": "-5",
			"name": "Servian",
			"code_post": "XXXXX",
			"id_back": "0"
		}
	],
	"clients": [
		{
			"id": "100",
			"firstName": "John",
			"lastName": "Duff",
			"mail": "vlamonmail",
			"userLog": "apero",
			"pwd": "apero",
			"desc": "some infos",
			"products": [
				{
					"id": "10",
					"id_city": "-1",
					"id_client": "100",
					"name": "wine",
					"desc": "prod desc",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "20",
					"id_city": "-1",
					"id_client": "100",
					"name": "beer",
					"desc": "prod desc",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "2000",
					"id_label": "-1",
					"prix": "6",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "30",
					"id_city": "-1",
					"id_client": "100",
					"name": "sauciflar",
					"desc": "prod desc",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "3000",
					"id_label": "-1",
					"prix": "34",
					"special_offer": "parce que ca le vaut bien"
				}
			]
		},
		{
			"id": "200",
			"firstName": "Jean",
			"lastName": "Bono",
			"mail": "vlamonmail",
			"userLog": "apero",
			"pwd": "apero",
			"desc": "some infos",
			"products": [
				{
					"id": "40",
					"id_city": "-1",
					"id_client": "200",
					"name": "white wine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "56",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "41",
					"id_city": "-1",
					"id_client": "200",
					"name": "red wine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "33",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "42",
					"id_city": "-1",
					"id_client": "200",
					"name": "pink wine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "36",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "43",
					"id_city": "-1",
					"id_client": "200",
					"name": "green wine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "44",
					"id_city": "-1",
					"id_client": "200",
					"name": "blue wine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "1000",
					"id_label": "-1",
					"prix": "29",
					"special_offer": "parce que ca le vaut bien"
				}
			]
		},
		{
			"id": "300",
			"firstName": "Alain",
			"lastName": "Proviste",
			"mail": "vlamonmail",
			"userLog": "apero",
			"pwd": "apero",
			"desc": "some infos",
			"products": [
				{
					"id": "51",
					"id_city": "-1",
					"id_client": "300",
					"name": "paté",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "3000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "52",
					"id_city": "-1",
					"id_client": "300",
					"name": "jambon cru",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "3000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "56",
					"id_city": "-1",
					"id_client": "300",
					"name": "jambon blanc",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "3000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				},
				{
					"id": "58",
					"id_city": "-1",
					"id_client": "300",
					"name": "bibine",
					"desc": "du bon vin",
					"img": [
						"ici", "labas", "un peu plus loin"
					],
					"id_category": "2000",
					"id_label": "-1",
					"prix": "12",
					"special_offer": "parce que ca le vaut bien"
				}
			]
		}
	],
	"products": [
		{
			"id": "51",
			"id_city": "-1",
			"id_client": "300",
			"name": "paté",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "3000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "52",
			"id_city": "-1",
			"id_client": "300",
			"name": "jambon cru",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "3000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "56",
			"id_city": "-1",
			"id_client": "300",
			"name": "jambon blanc",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "3000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "58",
			"id_city": "-1",
			"id_client": "300",
			"name": "bibine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "2000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "40",
			"id_city": "-1",
			"id_client": "200",
			"name": "white wine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "56",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "41",
			"id_city": "-1",
			"id_client": "200",
			"name": "red wine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "33",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "42",
			"id_city": "-1",
			"id_client": "200",
			"name": "pink wine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "36",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "43",
			"id_city": "-1",
			"id_client": "200",
			"name": "green wine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "44",
			"id_city": "-1",
			"id_client": "200",
			"name": "blue wine",
			"desc": "du bon vin",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "29",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "10",
			"id_city": "-1",
			"id_client": "100",
			"name": "wine",
			"desc": "prod desc",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "1000",
			"id_label": "-1",
			"prix": "12",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "20",
			"id_city": "-1",
			"id_client": "100",
			"name": "beer",
			"desc": "prod desc",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "2000",
			"id_label": "-1",
			"prix": "6",
			"special_offer": "parce que ca le vaut bien"
		},
		{
			"id": "30",
			"id_city": "-1",
			"id_client": "100",
			"name": "sauciflar",
			"desc": "prod desc",
			"img": [
				"ici", "labas", "un peu plus loin"
			],
			"id_category": "3000",
			"id_label": "-1",
			"prix": "34",
			"special_offer": "parce que ca le vaut bien"
		}
	],
	"categories": [
		{
			"id": "1000",
			"type": "wine"
		},
		{
			"id": "2000",
			"type": "binouz"
		},
		{
			"id": "3000",
			"type": "charcut"
		}
	]
}