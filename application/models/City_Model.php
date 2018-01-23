<?php

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 22/01/2018
 * Time: 10:01
 */
class City_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_articles($table)
    {
        $query = $this->db->get($table, 10);
        return $query->result_array();
    }
}
