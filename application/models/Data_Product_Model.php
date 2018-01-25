<?php

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 23/01/2018
 * Time: 08:51
 */
class Data_Product_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_dataProduct($id)
    {
        $query = $this->db->query('SELECT COUNT(produit.name) FROM  produit WHERE produit.id_city = '.$id);
        return $query->result();
    }
}
