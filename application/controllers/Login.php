<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
        public function index()
    {
        $dados['titulo'] = 'CV';
        $dados['h2'] = 'Setup do sistema';
        $this->load->view('painel/setup', $dados);
    }
    
    public function formulario(){
        $this->load->view('formLogin');
    }
    
    public function usuario(){
        $this->load->view('formUsuario');
    }
    
    public function cadastro(){
        $this->load->model('UserModel','user');
        $nome = $this->input->post("user_nome");
        $login = $this->input->post("user_login");
        $senha = $this->input->post("user_senha");
        $this->user->__init__($nome,$login,$senha);
        $b = $this->db->insert('users',$this->user->toArray());
        if($b == 1){
            //PAGINA INICIAL
            //header("location: /index.php/controller/metodo");
            header("location: /");
        }
    }
    
    public function autentica(){
        $login = $this->input->post("user_login");
        $senha = $this->input->post("user_senha");
        $this->load->model('UserModel','user');
        $this->user->__init__("",$login,$senha);
         if ( $this->user->existeUsuario() ){
            $this->session->set_userdata("_LOGIN",$login);
            
            redirect(base_url("dashboard"));
        }else{
            redirect(base_url("login"));
        }
    }
    
    public function sair(){
        $this->session->unset_userdata('_LOGIN');
        redirect(base_url("login"));
    }
}
?>