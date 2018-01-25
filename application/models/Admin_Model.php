<?php

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 23/01/2018
 * Time: 22:10
 */
class Admin_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }



    public function verif_connexion($user, $pw)
    {
        $query = $this->db->get_where('admin', array('email' => $user, 'password' => md5($pw)));
        if ($query->row_array() != null)
            return $query->row_array();
        else
            return 0;
    }
}
