<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('blogModel');
        // carregar o model
        $this->load->model('optionModel', 'option');

    }
    
    public function index(){
        redirect('blog/listar', 'refresh');
    }
    
    public function listar(){
        $dados['titulo'] = 'ADMIN - CV';
        $dados['h2'] = 'Lista de posts';
        // $dados['tela'] = 'listar';
        $this->load->view('painel/blog-lista', $dados);
    }
    
    public function cadastrar(){
        $dados['titulo'] = 'ADMIN - CV';
        $dados['h2'] = '<h3>Novo Post</h3>';
        
        //regras de validação
        // if($this->form_validacao->run() == FALSE):
        //     if(validacao_errors()):
        //         set_msg(validacao_errors());
        //     endif;
        // else:
        //     $this->load->library('upload', $config_upload());
        //     if($this->upload->do_upload('blog_imagem')):
        //         //upload executado
        //         $dados_upload = $this->upload->data();
        //         $dados_form = $this->input->post();
        //         var_dump($dados_upload);
        //     else:
        //         //erro upload
        //         $msg = $this->upload->display_errors();
        //         $msg .= '<p>São permitidos arquivos JPG e PNG de até 512kb </p>';
        //         set_msg($smg);
        //     endif;
        // endif;

        
        // $dados['tela'] = 'listar';
        $this->load->view('painel/blog-novo', $dados);
    }
}