<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('social_model','social');
        $this->load->helper('url');
    }
    
    public function editar(){
        $id = $this->uri->segment(3);
        if (empty($id)):
            show_404();
        endif;
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Rede Social';
        $data['social'] = $this->social->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			 $this->load->view('painel/social', $data);
		else:
			 $this->load->view('painel');
        endif;
    }
    
        public function create()
    {
        $data = array(
            'social_facebook' => $this->input->post('social_facebook'),
            'social_gplus' => $this->input->post('social_gplus'),
            'social_linkedin' => $this->input->post('social_linkedin')
        );  
        if($id = $this->social->gravar($data)):
            // set_msg('<p>Post cadastrado com sucesso!</p>');
           redirect( base_url() . 'social/editar/1');
        else:
            echo 'não funcionou';
            //set_msg('<p>Erro! Post não encontrado. </p>');
        endif;
    }
}