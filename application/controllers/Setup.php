<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        // carregar o model
        //$this->load->model('option_model', 'option');

    }

    public function index()
    {
    //     if($this->option->get_option('setup_executado') != 1):
    //         //setup não está ok, mostrar tela para instalar o sistema
    //         redirect('setup/instalar','refresh');
    //     endif;
    //             //validar o formulário
    //     $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
    //     $this->form_validation->set_rules('senha', 'REPITA A SENHA', 'trim|required|min_length[6]');
    //      //veriica a validação
    //     if($this->form_validation->run() == FALSE):
    //         if(validation_errors()):
    //             set_msg(validation_errors());
    //         endif;
    //     else:
    //         $dados_form = $this->input->post();
    //         if($this->option->get_option('user_login') == $dados_form['login']):
    //             //usuário existe
    //             if(password_verify($dados_form['senha'], $this->option->get_option('user_pass'))):
    //                 //senha ok, fazer login
    //                 $this->session->set_userdata('logged', TRUE);
    //                 $this->session->set_userdata('user_login', $dados_form['login']);
    //                 // $this->session->set_userdata('user_email', $this->option->get_option('user_email');
    //                 //fazer redirect para home do painel
                    
    //                 else:
    //                     //senha incorreta
    //                     set_msg('<p>Senha está incorreta</p>');
    //                 endif;
    //         else:
    //             //usuário não existe
    //             set_msg('<p>Usuário não existe!</p>');
    //         endif;
    //     endif;
    // }
        $dados['titulo'] = 'CV';
        $dados['h2'] = 'Setup do sistema';
        $this->load->view('painel/setup', $dados);
    }

    // public function alterar()
    // {

    //     if($this->option->get_option('setup_executado') == 1):
    //         //setup ok, mostrar tela para editar dados do setup
    //         redirect('setup/alterar', 'refresh');
            
    //     else:
    //         //não instalado, mostra tela do setup
    //         redirect('setup/instalar', 'refresh');
    //     endif;
    // }
    
    // public function instalar(){
        
    //     if($this->option->get_option('setup_executado') == 1):
    //     //     //stup ok, mostrar na tela para editar dados de setup
    //         redirect('setup/alterar','refresh');
    //     endif;
        
    //     //validar o formulário
    //     $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
    //     $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
    //     $this->form_validation->set_rules('senha', 'REPITA A SENHA', 'trim|required|min_length[6]');
    //     $this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');
    //     //veriica a validação
    //     if($this->form_validation->run() == FALSE):
    //         if(validation_errors()):
    //             set_msg(validation_errors());
    //         endif;
    //     else:
    //         $dados_form = $this->input->post();
    //         $this->option->update_option('user_login', $dados_form['login']);
    //         $this->option->update_option('user_email', $dados_form['email']);
    //         $this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT)
    //             );
    //         $inserido = $this->option->update_option('setup_executado', 1);
    //         if($inserido):
    //             set_msg('<p>Sistema instalado, use os dados cadastrados para logar no sistema.</p>');
    //             redirect('setup/login', 'refresh');
    //         //set_msg('<p>validação ok</p>');
    //     endif;
    //     endif;
    //     //carrega view
    //     $dados['titulo'] = 'CV';
    //     $dados['h2'] = 'Setup do Sistema';
    //     $this->load->view('painel/setup', $dados);
    // }
    
    // public function login(){
    //     if($this->option->get_option('setup_executado') != 1):
    //         //setup não está ok, mostrar tela para instalar o sistema
    //         redirect('setup/instalar','refresh');
    //     endif;
    //             //validar o formulário
    //     $this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
    //     $this->form_validation->set_rules('senha', 'REPITA A SENHA', 'trim|required|min_length[6]');
    //      //veriica a validação
    //     if($this->form_validation->run() == FALSE):
    //         if(validation_errors()):
    //             set_msg(validation_errors());
    //         endif;
    //     else:
    //         $dados_form = $this->input->post();
    //         if($this->option->get_option('user_login') == $dados_form['login']):
    //             //usuário existe
    //             if(password_verify($dados_form['senha'], $this->option->get_option('user_pass'))):
    //                 //senha ok, fazer login
    //                 $this->session->set_userdata('logged', TRUE);
    //                 $this->session->set_userdata('user_login', $dados_form['login']);
    //                 // $this->session->set_userdata('user_email', $this->option->get_option('user_email');
    //                 //fazer redirect para home do painel
                    
    //                 else:
    //                     //senha incorreta
    //                     set_msg('<p>Senha está incorreta</p>');
    //                 endif;
    //         else:
    //             //usuário não existe
    //             set_msg('<p>Usuário não existe!</p>');
    //         endif;
    //     endif;
    //     $dados['titulo'] = 'CV';
    //     $dados['h2'] = 'Setup do sistema';
    //     $this->load->view('painel/login', $dados);
    // }
    
    // public function alterar(){
    //     verifica_login();
        
    //     //carrega a view
        
    //     $dados['titulo'] = 'CV';
    //     $dados['h2'] = 'Alterar configuração básica';
    //     $this->load->view('painel/config', $dados);
    // }
    
    public function login(){
        $usuario = $this->input->post('usuario_nome');
        $senha = $this->input->post('usuario_senha');
        $this->db->where('usuario_nome',$usuario);
        $this->db->where('usuario_senha',$senha);
        $this->db->where('usuario_status',1);
        $usuario = $this->db->get('usuarios')->result();
        if(count($usuario)===1){
            $dados = array('usuario_nome' => $usuario[0]->usuario_nome,'logado' => TRUE);
            $this->session->set_userdata($dados);
            redirect(base_url("dashboard"));
        }else{
            redirect(base_url("setup"));
        }
    }
    
    public function logoff(){
        echo("Logout");
    }
    
    public function logout(){
        // $this->session->sess_destroy();
        redirect(base_url("painel"));
    }

}
