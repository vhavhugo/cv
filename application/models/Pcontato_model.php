<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcontato_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0):
            $query = $this->db->get('pcontato');
            return $query->result_array();
        endif;
        $query = $this->db->get_where('pcontato', array('pcontato_id' => 1));
        return $query->row_array();
    }
        
        public function gravar($data)
    {
            return $this->db->update('pcontato', $data);
    }
        public function get_current_pcontato() {
        $this->db->query = "SELECT pcontato_imagem FROM pcontato LIMIT 0,1;";
        $data = $this->db->fetch();
        return (isset($data[0])) ? $data[0]->pcontato_imagem : null;
    }
}