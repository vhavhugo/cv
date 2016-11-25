<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('blogModel');
        if(!$this->session->userdata('logado')){
            redirect(base_url('painel'));
        }
        // carregar o model
        //$this->load->model('optionModel', 'option');
    }
    
    public function index(){
        redirect('blog/listar', 'refresh');
    }
    
    public function listar(){
        $dados['titulo'] = 'ADMIN - CV';
        $dados['h2'] = 'Lista de posts';
        // $dados['tela'] = 'listar';
        $dados['blog'] = $this->blogModel->get();
        
        $this->load->view('painel/blog-lista', $dados);
    }
    
    public function cadastrar(){
        $dados['titulo'] = 'ADMIN - CV';
        $dados['h2'] = '<h3>Novo Post</h3>';
        
        $this->form_validation->set_rules('blog_titulo', 'Título', 'trim|required');
        $this->form_validation->set_rules('blog_subtitulo', 'Sub-Título', 'trim|required');
        $this->form_validation->set_rules('blog_descricao', 'Conteúdo', 'trim|required');
        
        //regras de validação
        if($this->form_validation->run() == FALSE):
             if(validation_errors()):
                 set_msg(validacao_errors());
             endif;
         else:
             $this->load->library('upload', config_upload());
             if($this->upload->do_upload('blog_imagem')):
                //upload executado
                $dados_upload = $this->upload->data();
                $dados_form = $this->input->post();
                $dados_insert['blog_titulo'] = to_bd($dados_form['blog_titulo']);
                $dados_insert['blog_subtitulo'] = to_db($dados_form['blog_subtitulo']);
                $dados_insert['blog_descricao'] = to_db($dados_form['blog_descricao']);
                $dados_insert['blog_imagem'] = $dados_upload['file_name'];
                
                if($id = $this->blog->salvar($dados_insert)):
                    // set_msg('<p>Post cadastrado com sucesso!</p>');
                    redirect('blog/listar', 'refresh');
                else:
                    //set_msg('<p>Erro! Post não encontrado. </p>');
                endif;

             endif;

         endif;

    
        // $dados['tela'] = 'listar';
        $this->load->view('painel/blog-novo', $dados);
    }
    
    // public function excluir(){
    //     $this->url->uri->seguiment(3);
    //     if($id >0){
    //     //id informado, continuar com exclusão
    //     if($blog = $this->blog->get_single($id)):
    //         $dados['blog'] = $blog;
    //         else:
    //             redirect('blog/listar', 'refresh'); 
    //         endif;
    //     else:
    //         redirect('blog/listar', 'refresh');
    //     endif;
    //     endif;
    //     //carrega a view
    //     $dados['titulo'] = 'ADMIN - CV';
    //     $dados['h2'] = '<h3>Novo Post</h3>';
    //     $this->load->view('painel', $dados);
    //     }
    // }
}