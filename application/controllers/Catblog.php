<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catblog extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('catblog_model','catblog');
        $this->load->helper('url_helper');
        // $this->load->library('form_validation');
        // $this->load->library('table');
        
    }

    public function index()
    {
        $data['catblog'] = $this->catblog->get_all();        
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Lista de categorias do blog';
        $sess = $this->session->userdata("_LOGIN");
		if(isset($sess)){
			$this->load->view('painel/catblog', $data);
		}else{
			$this->load->view('painel');
		}
        
    }
 
    // public function view($url = NULL)
    // {
    //     $data['catblog'] = $this->news_model->get_news($url);
        
    //     if (empty($data['catblog']))
    //     {
    //         show_404();
    //     }
 
    //     $data['catblog_nome'] = $data['catblog_nome']['catblog_nome'];
 
    //     $this->load->view('news/header', $data);
    //     $this->load->view('news/view', $data);
    //     $this->load->view('news/footer');
    // }
    
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('catblog_nome', 'Título', 'required');
        if ($this->form_validation->run() === FALSE)
        {
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Cadastrar nova categoria do blog';
        $sess = $this->session->userdata("_LOGIN");
        if(isset($sess)){
			 $this->load->view('painel/catblog-novo', $data);
		}else{
			 $this->load->view('painel');
		}
        }else{
            $this->catblog->gravar();
            redirect( base_url() . 'catblog');
        }
    }
    
    public function editar()
    {
        $id = $this->uri->segment(3);
        
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['titulo'] = 'ADMIN - CV'; 
        $data['h2'] = 'Editar categoria do blog';
        
        $data['catblog'] = $this->catblog->get_by_id($id);
        
        
        $this->form_validation->set_rules('catblog_nome', 'Título', 'required');
        
 
        if ($this->form_validation->run() === FALSE)
        {
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)){
			
			 $this->load->view('painel/catblog-editar', $data);
		}else{
			 $this->load->view('painel');
		}
        }else{
            $this->catblog->gravar($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'catblog');
        }
    }
    
    public function excluir()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        // $catblog = $this->catblog->get_by_id($id);
        
        $this->catblog->delete($id);        
        redirect( base_url() . 'catblog');        
    }
}