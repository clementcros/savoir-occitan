<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 23/01/2018
 * Time: 22:05
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->helper('url_helper');
//        $this->load->helper('form');
    }

    public function index()
    {
        $data['titre'] = "interface admin";
        //$this->load->view('header');
        $this->load->view('Admin/index', $data);
        // $this->load->view('footer');
    }


    public function connexion()
    {
        if (isset($_SESSION['admin'])) {
            redirect('admin', 'refresh');
        }
        if ($_POST && $this->Admin_Model->verif_connexion($this->input->post('user'), $this->input->post('password')) != 0) {
            $_SESSION['admin'] = $this->Admin_Model->verif_connexion($this->input->post('user'), $this->input->post('password'));
                redirect('examples', 'refresh');
        }
        $data['titre'] = "Connexion Admin";
        $data['user'] = array(
            'label' => 'Utilisateur: ',
            'name' => 'user',
            'class' => 'user',
            'placeholder' => 'Username...',
        );
        $data['password'] = array(
            'label' => 'Mot de passe : ',
            'name' => 'password',
            'class' => 'user',
            'placeholder' => 'Mot de passe ...',
            'type' => 'password',
        );

        $this->load->view('Admin/connexion', $data);

    }

    public function disconnect()
    {
        unset($_SESSION['admin']);
        session_destroy();
        redirect('admin/connexion', 'refresh');
    }

}
