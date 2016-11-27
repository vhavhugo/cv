<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('servicos_model','servicos');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['servicos'] = $this->servicos->get_all();        
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Lista de serviços';
        $sess = $this->session->userdata("_LOGIN");
		if(isset($sess)){
			$this->load->view('painel/servicos', $data);
		}else{
			$this->load->view('painel');
		}
        
    }
    
    public function create()
    {
        $this->servicos->gravar();
        redirect( base_url() . 'servicos');
    }
    
    
    public function novo(){
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Cadastrar novo serviço';
        $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			     $this->load->view('painel/servicos-novo', $data);
		    else:
			    $this->load->view('painel');
		    endif;
    }
    
    
    public function editar()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id)):
            show_404();
        endif;
        $data['titulo'] = 'ADMIN - CV'; 
        $data['h2'] = 'Editar serviço';
        $data['servicos'] = $this->servicos->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)){
			 $this->load->view('painel/servicos-editar', $data);
		}else{
			 $this->load->view('painel');
		}

    }
    
    public function excluir()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id)):
            show_404();
        endif;
        $this->servicos->delete($id);        
        redirect( base_url() . 'servicos');        
    }
}