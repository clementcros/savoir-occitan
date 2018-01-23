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

    public function get_dataProduct($table, $id)
    {
        $query = $this->db->query('SELECT citys.city,`nom`,`description`, `prix`, `offre_special` FROM produit INNER JOIN '.$table.' WHERE produit.id = '.$id);
        return $query->result_array();
    }
}
