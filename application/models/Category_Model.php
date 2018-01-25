<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 23/01/2018
 * Time: 23:17
 */


class Category_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }



    public function get_data($id) {
        $query = $this->db->query('SELECT DISTINCT type FROM category LEFT JOIN produit ON produit.id_category = category.id WHERE produit.id_city ='.$id);
        return $query->result_array();
    }
}

