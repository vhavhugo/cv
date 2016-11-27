<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencia extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('experiencia_model','experiencia');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['experiencia'] = $this->experiencia->get_all();        
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Lista de experiências';
        $sess = $this->session->userdata("_LOGIN");
		if(isset($sess)){
			$this->load->view('painel/experiencia', $data);
		}else{
			$this->load->view('painel');
		}
        
    }
    
    public function create()
    {
        $this->experiencia->gravar();
        redirect( base_url() . 'experiencia');
    }
    
    
    public function novo(){
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Cadastrar nova experiência';
        $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			     $this->load->view('painel/experiencia-novo', $data);
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
        $data['h2'] = 'Editar experiência';
        $data['experiencia'] = $this->experiencia->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)){
			 $this->load->view('painel/experiencia-editar', $data);
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
        $this->experiencia->delete($id);        
        redirect( base_url() . 'experiencia');        
    }
}