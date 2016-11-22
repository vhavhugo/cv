<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracao extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('configuracao_model','configuracao');

    }
    
    public function editar(){
        $id = $this->uri->segment(3);
        if (empty($id)):
            show_404();
        endif;
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Configurações Gerais';
        $data['configuracao'] = $this->configuracao->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			 $this->load->view('painel/configuracao', $data);
		else:
			 $this->load->view('painel');
		
        endif;
    }
}