<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 22/01/2018
 * Time: 13:30
 */
class Result extends CI_Controller
{
    public $data;

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     *
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Result_Model');
        $this->load->model('City_Model');
        $this->load->model('Data_Product_Model');
        $this->load->model('Carouselle_Model');
        $this->load->model('Category_Model');
        $this->load->helper('url_helper');
    }


    public function result($id)
    {
        $data['data'] = $this->Result_Model->get_articles('citys', $id);
        $result['result'] = $this->Result_Model->get_data($id);
        $carouselle['carouselle'] = $this->Carouselle_Model->get_carouselle($id);
        $product['produits'] = $this->Data_Product_Model->get_dataProduct($id);
        $category['category'] = $this->Category_Model->get_data($id);


        $getData = count($product['produits']);
        if ($getData == 0) {
            $data['list'] = $this->City_Model->get_articles('citys');
            $this->load->view('nothing', $data);
            $this->load->library('javascript');
        } else {
            $json = json_encode($data);
            $data = $data + $result + $carouselle + $category;
            $test = 0;
            if ($test == 0) {
                $this->load->view('result', $data);
                $this->load->library('javascript');
            }
            else {
                $this->load->view('resultat');
                return $json;
            }
        }


    }

    public function jsonData($json) {

        $this->load->view('json', $json);
    }


}
