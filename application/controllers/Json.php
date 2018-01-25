<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 22/01/2018
 * Time: 14:13
 */
class Json extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Result_Model');
        $this->load->helper('url_helper');
    }

    public function result($id){
        $data['data'] = $this->Result_Model->get_data($id);
        header('Content-type: application/json');
//        echo json_encode($this->Result_Model->get_data($id));
        $json = "{
	\"cities\": [
		{
			\"id\": \"-1\",
			\"name\": \"Bassan\",
			\"code_post\": \"XXXXX\",
			\"id_back\": \"0\"
		},
		{
			\"id\": \"-2\",
			\"name\": \"Lieuran\",
			\"code_post\": \"XXXXX\",
			\"id_back\": \"0\"
		},
		{
			\"id\": \"-3\",
			\"name\": \"Sérignan\",
			\"code_post\": \"XXXXX\",
			\"id_back\": \"0\"
		},
		{
			\"id\": \"-4\",
			\"name\": \"Valras\",
			\"code_post\": \"XXXXX\",
			\"id_back\": \"0\"
		},
		{
			\"id\": \"-5\",
			\"name\": \"Servian\",
			\"code_post\": \"XXXXX\",
			\"id_back\": \"0\"
		}
	],
	\"clients\": [
		{
			\"id\": \"100\",
			\"firstName\": \"John\",
			\"lastName\": \"Duff\",
			\"mail\": \"vlamonmail\",
			\"userLog\": \"apero\",
			\"pwd\": \"apero\",
			\"desc\": \"some infos\",
			\"products\": [
				{
					\"id\": \"10\",
					\"id_city\": \"-1\",
					\"id_client\": \"100\",
					\"name\": \"wine\",
					\"desc\": \"prod desc\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"4\"
				},
				{
					\"id\": \"20\",
					\"id_city\": \"-1\",
					\"id_client\": \"100\",
					\"name\": \"beer\",
					\"desc\": \"prod desc\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"2000\",
					\"id_label\": \"-1\",
					\"price\": \"6\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"4\"
				},
				{
					\"id\": \"30\",
					\"id_city\": \"-1\",
					\"id_client\": \"100\",
					\"name\": \"sauciflar\",
					\"desc\": \"prod desc\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"3000\",
					\"id_label\": \"-1\",
					\"price\": \"34\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"5\"
				}
			]
		},
		{
			\"id\": \"200\",
			\"firstName\": \"Jean\",
			\"lastName\": \"Bono\",
			\"mail\": \"vlamonmail\",
			\"userLog\": \"apero\",
			\"pwd\": \"apero\",
			\"desc\": \"some infos\",
			\"products\": [
				{
					\"id\": \"40\",
					\"id_city\": \"-1\",
					\"id_client\": \"200\",
					\"name\": \"white wine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"56\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"3\"
				},
				{
					\"id\": \"41\",
					\"id_city\": \"-1\",
					\"id_client\": \"200\",
					\"name\": \"red wine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"33\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"3\"
				},
				{
					\"id\": \"42\",
					\"id_city\": \"-1\",
					\"id_client\": \"200\",
					\"name\": \"pink wine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"36\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"4\"
				},
				{
					\"id\": \"43\",
					\"id_city\": \"-1\",
					\"id_client\": \"200\",
					\"name\": \"green wine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"2\"
				},
				{
					\"id\": \"44\",
					\"id_city\": \"-1\",
					\"id_client\": \"200\",
					\"name\": \"blue wine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"1000\",
					\"id_label\": \"-1\",
					\"price\": \"29\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"5\"
				}
			]
		},
		{
			\"id\": \"300\",
			\"firstName\": \"Alain\",
			\"lastName\": \"Proviste\",
			\"mail\": \"vlamonmail\",
			\"userLog\": \"apero\",
			\"pwd\": \"apero\",
			\"desc\": \"some infos\",
			\"products\": [
				{
					\"id\": \"51\",
					\"id_city\": \"-1\",
					\"id_client\": \"300\",
					\"name\": \"paté\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"3000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"4\"
				},
				{
					\"id\": \"52\",
					\"id_city\": \"-1\",
					\"id_client\": \"300\",
					\"name\": \"jambon cru\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"3000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"4\"
				},
				{
					\"id\": \"56\",
					\"id_city\": \"-1\",
					\"id_client\": \"300\",
					\"name\": \"jambon blanc\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"3000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"5\"
				},
				{
					\"id\": \"58\",
					\"id_city\": \"-1\",
					\"id_client\": \"300\",
					\"name\": \"bibine\",
					\"desc\": \"du bon vin\",
					\"img\": [
						\"ici\", \"labas\", \"un peu plus loin\"
					],
					\"id_category\": \"2000\",
					\"id_label\": \"-1\",
					\"price\": \"12\",
					\"special_offer\": \"parce que ca le vaut bien\",
					\"note\": \"2\"
				}
			]
		}
	],
	\"products\": [
		{
			\"id\": \"51\",
			\"id_city\": \"-1\",
			\"id_client\": \"300\",
			\"name\": \"paté\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"3000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"4\"
		},
		{
			\"id\": \"52\",
			\"id_city\": \"-1\",
			\"id_client\": \"300\",
			\"name\": \"jambon cru\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"3000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"4\"
		},
		{
			\"id\": \"56\",
			\"id_city\": \"-1\",
			\"id_client\": \"300\",
			\"name\": \"jambon blanc\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"3000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"3\"
		},
		{
			\"id\": \"58\",
			\"id_city\": \"-1\",
			\"id_client\": \"300\",
			\"name\": \"bibine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"2000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"3\"
		},
		{
			\"id\": \"40\",
			\"id_city\": \"-1\",
			\"id_client\": \"200\",
			\"name\": \"white wine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"56\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"4\"
		},
		{
			\"id\": \"41\",
			\"id_city\": \"-1\",
			\"id_client\": \"200\",
			\"name\": \"red wine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"33\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"2\"
		},
		{
			\"id\": \"42\",
			\"id_city\": \"-1\",
			\"id_client\": \"200\",
			\"name\": \"pink wine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"36\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"5\"
		},
		{
			\"id\": \"43\",
			\"id_city\": \"-1\",
			\"id_client\": \"200\",
			\"name\": \"green wine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"4\"
		},
		{
			\"id\": \"44\",
			\"id_city\": \"-1\",
			\"id_client\": \"200\",
			\"name\": \"blue wine\",
			\"desc\": \"du bon vin\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"29\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"4\"
		},
		{
			\"id\": \"10\",
			\"id_city\": \"-1\",
			\"id_client\": \"100\",
			\"name\": \"wine\",
			\"desc\": \"prod desc\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"1000\",
			\"id_label\": \"-1\",
			\"price\": \"12\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"5\"
		},
		{
			\"id\": \"20\",
			\"id_city\": \"-1\",
			\"id_client\": \"100\",
			\"name\": \"beer\",
			\"desc\": \"prod desc\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"2000\",
			\"id_label\": \"-1\",
			\"price\": \"6\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"2\"
		},
		{
			\"id\": \"30\",
			\"id_city\": \"-1\",
			\"id_client\": \"100\",
			\"name\": \"sauciflar\",
			\"desc\": \"prod desc\",
			\"img\": [
				\"ici\", \"labas\", \"un peu plus loin\"
			],
			\"id_category\": \"3000\",
			\"id_label\": \"-1\",
			\"price\": \"34\",
			\"special_offer\": \"parce que ca le vaut bien\",
			\"note\": \"5\"
		}
	],
	\"categories\": [
		{
			\"id\": \"1000\",
			\"type\": \"wine\"
		},
		{
			\"id\": \"2000\",
			\"type\": \"binouz\"
		},
		{
			\"id\": \"3000\",
			\"type\": \"charcut\"
		}
	]
}";
        echo $json;
    }
}
