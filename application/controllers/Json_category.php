<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 22/01/2018
 * Time: 14:13
 */
class Json_category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Result_Model');
        $this->load->helper('url_helper');
    }

    public function categories($id)
    {
        $data['categories'] = $this->Result_Model->get_category($id);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
