<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();

    }
    
    public function index(){
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Configurações Gerais';
       
        $sess = $this->session->userdata("_LOGIN");
		$data["sess"] = $sess;
		if(isset($sess)){
			 $this->load->view('painel/dashboard', $data);
		}else{
			 $this->load->view('painel');
		}
        
    }
    
}