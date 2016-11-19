<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
        function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        // $this->load->model('blogModel');
        // carregar o model
        // $this->load->model('optionModel', 'option');

    }
    
    public function index(){
        $this->load->view('login', 'refresh');
    }
}