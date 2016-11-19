<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        
    }

    public function index()
    {
    
        $dados['titulo'] = 'CV';
        $dados['h2'] = 'Setup do sistema';
        $this->load->view('painel/dashboard', $dados);
    }

    
}
