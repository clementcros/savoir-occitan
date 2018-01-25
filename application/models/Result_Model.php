<?php

class Result_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_articles($table, $id = NULL)
    {
        if ($id != NULL) {
            $query = $this->db->get_where($table, array('id' => $id));
            return $query->row_array();
        } else
            $query = $this->db->get($table);
        return $query->result_array();
    }

    public function get_data($id)
    {
        $query = $this->db->query('SELECT citys.id, citys.name, produit.id, produit.id_client, produit.id_city, produit.name, produit.describe,
                                  produit.img_1,produit.img_2,produit.img_3,produit.id_category,produit.price,produit.special_offer, produit.note FROM citys
                                   LEFT JOIN produit ON produit.id_city = citys.id WHERE citys.id =' . $id);
        return $query->result_array($query);
    }

    public function get_category()
    {

        $query = $this->db->query('SELECT * FROM category');
        return $query->result_array();
    }

    public function get_city($id)
    {

        $query = $this->db->query('SELECT * FROM citys WHERE id ='. $id);
        return $query->result_array();
    }
}
