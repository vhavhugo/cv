<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracao extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('configuracao_model','configuracao');
        $this->load->helper('url');

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
    
        
    public function create()
    {
        $id = $this->uri->segment(3);
         $data = array(
            'config_nome' => $this->input->post('config_nome'),
            'config_data' => $this->input->post('config_data'),
            'config_endereco' => $this->input->post('config_endereco'),
            'config_tel' => $this->input->post('config_tel'),
            'config_tel2' => $this->input->post('config_tel2'),
            'config_email' => $this->input->post('config_email'),
            'config_email2' => $this->input->post('config_email2'),
            'config_site' => $this->input->post('config_site'),
            'config_descricao' => $this->input->post('config_descricao')
        );
            $this->db->where('config_id', $id);
            
            $this->configuracao->gravar($data);
            
            redirect( base_url() . 'configuracao/editar/1');
    }
    
    //     public function create()
    // {
    //     $id = $this->uri->segment(3);

    //     $data = array(
    //         'config_nome' => $this->input->post('config_nome'),
    //         'config_data' => $this->input->post('config_data'),
    //         'config_endereco' => $this->input->post('config_endereco'),
    //         'config_tel' => $this->input->post('config_tel'),
    //         'config_tel2' => $this->input->post('config_tel2'),
    //         'config_email' => $this->input->post('config_email'),
    //         'config_email2' => $this->input->post('config_email2'),
    //         'config_site' => $this->input->post('config_site'),
    //         'config_descricao' => $this->input->post('config_descricao'),
    //     );
    //     print_r($data);exit;
    //     $this->configuracao->gravar();
     
    //     redirect( base_url() . 'configuracao/editar/1');
    // }
}