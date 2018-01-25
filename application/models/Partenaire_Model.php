<?php

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 24/01/2018
 * Time: 07:47
 */
class Partenaire_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_data()
    {
        $query = $this->db->query('SELECT * FROM `partenaire`');
        return $query->result_array($query);
    }
}
