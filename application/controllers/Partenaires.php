<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 24/01/2018
 * Time: 07:43
 */
class Partenaires extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Partenaire_Model');
    }

    public function index()
    {
        $data['data'] = $this->Partenaire_Model->get_data();

        $this->load->view('partenaire', $data);
    }
}
