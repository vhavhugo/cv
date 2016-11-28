<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('users_model','users');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['users'] = $this->users->get_all();        
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Lista de cursos';
        $sess = $this->session->userdata("_LOGIN");
		if(isset($sess)){
			$this->load->view('painel/users', $data);
		}else{
			$this->load->view('painel');
		}
        
    }
    
    public function create()
    {
        $this->users->gravar();
        redirect( base_url() . 'users');
    }
    
    
    public function novo(){
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Cadastrar novo curso';
        $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			     $this->load->view('painel/users-novo', $data);
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
        $data['users'] = $this->users->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)){
			 $this->load->view('painel/users-editar', $data);
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
        $this->users->delete($id);        
        redirect( base_url() . 'users');        
    }
}