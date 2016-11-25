<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function salvar($dados){
        if(isset($dados['blog_id']) && $dados['blog_id'] > 0):
            //post existe
        else:
            //post não existe
            $this->db->insert('blog',$dados);
            return $this->db->insert_id();
        endif;
    }
    
    public function get($limit=0, $offset=0){
        if($limit == 0):
            $this->db->order_by('blog_id','blog_descricao');
            $query = $this->db->get('blog');
            if($query->num_rows() > 0):
                return $query->result();
            else:
                return NULL;
            endif;
        endif;
    }
    
}