<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 22/01/2018
 * Time: 14:13
 */
class Json extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Result_Model');
        $this->load->helper('url_helper');
    }

    public function result($id){
        $data['data'] = $this->Result_Model->get_data($id);
        echo json_encode($this->Result_Model->get_data($id));
    }
}
