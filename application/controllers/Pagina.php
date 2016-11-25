<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');

    }

    public function index()
    {
        $dados['titulo'] = "CV";
        $this->load->view('home', $dados);
    }

    public function sobre()
    {
        $dados['titulo'] = "CV";
        $this->load->view('sobre', $dados);
    }

    public function portfolios()
    {
        $dados['titulo'] = "CV";
        $this->load->view('portfolios', $dados);
    }

    public function blog()
    {
        $dados['titulo'] = "CV";
        $this->load->view('blog', $dados);
    }

    public function contato()
    {
        $this->load->helper('form');
        $this->load->library(array('form_validation','email'));
        //regra de validação do formulário
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');
        if($this->form_validation->run() == FALSE):
            $dados['formerror'] = validation_errors();
        else:
            //recupera as informações do formulário
            $dados_form = $this->input->post();
            //Dados do e-mail
            $this->email->from($dados_form['email'], $dados_form['nome']);
            $this->email->to('vhavhugo@gmail.com');
            $this->email->subject($dados_form['assunto']);
            $this->email->message($dados_form['mensagem']);
            if($this->email->send()):
                $dados['formerror'] = 'Email enviado com sucesso!';
            else:
                $dados['formerror'] = 'Erro ao enviar, tente novamente em alguns minutos';
            endif;
        endif;
        
        $dados['titulo'] = "CV";
        $this->load->view('contato', $dados);
    }
}
