<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 23/01/2018
 * Time: 16:56
 */
class Carouselle_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_carouselle($id)
    {
        $query = $this->db->query('SELECT * FROM `carouselle` WHERE id_ville ='.$id);
        return $query->result();
    }
}

