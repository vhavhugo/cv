<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('configModel');
        // carregar o model
        //$this->load->model('option_model', 'option');

    }
    
    public function index(){
        redirect('config/listar', 'refresh');
    }
    
    public function listar(){
        $dados['titulo'] = 'ADMIN - CV';
        $dados['h2'] = 'Configurações Gerais';
        $dados['tela'] = 'listar';
        $this->load->view('painel/config-lista', $dados);
    }
}