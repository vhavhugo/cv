<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educacao extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('educacao_model','educacao');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['educacao'] = $this->educacao->get_all();        
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Lista de cursos';
        $sess = $this->session->userdata("_LOGIN");
		if(isset($sess)){
			$this->load->view('painel/educacao', $data);
		}else{
			$this->load->view('painel');
		}
        
    }
    
    public function create()
    {
        $this->educacao->gravar();
        redirect( base_url() . 'educacao');
    }
    
    
    public function novo(){
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Cadastrar novo curso';
        $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			     $this->load->view('painel/educacao-novo', $data);
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
        $data['h2'] = 'Editar curso';
        $data['educacao'] = $this->educacao->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)){
			 $this->load->view('painel/educacao-editar', $data);
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
        $this->educacao->delete($id);        
        redirect( base_url() . 'educacao');        
    }
}