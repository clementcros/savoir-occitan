<?php

class Result_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function get_data($id) {
        $query = $this->db->query('SELECT citys.id, citys.city, produit.id, produit.id_client, produit.id_ville, produit.nom, produit.description,
                                  produit.image_1,produit.image_2,produit.image_3,produit.id_category,produit.prix,produit.offre_special FROM citys
                                   LEFT JOIN produit ON produit.id_ville = citys.id WHERE citys.id ='.$id);
        return $query->result_array($query);
    }
}
