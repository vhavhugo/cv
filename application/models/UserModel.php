<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    private $nome, $senha, $login;
    
    public function __init__($nome,$login,$senha){
        $this->user_nome = $nome;
        $this->user_senha = $senha;
        $this->user_login = $login;
    }
    
    public function mostrar(){
        echo $this->user_nome;
        echo $this->user_login;
    }
    
    public function existeUsuario(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_login', $this->user_login );
        $this->db->where('user_senha', $this->user_senha );
        //SELECT * FROM users WHERE users.login = login AND
        //users.senha = senha
        $query = $this->db->get();
        return $query->num_rows() == 1;
    }
    
    public function toArray(){
        $data = array();
        $data["user_nome"] = $this->user_nome;
        $data["user_login"] = $this->user_login;
        $data["user_senha"] = $this->user_senha;
        return $data;
    }
}

?>