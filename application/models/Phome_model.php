<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phome_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    
    public function get_by_id($id = 0)
    {
        if ($id === 0):
            $query = $this->db->get('phome');
            return $query->result_array();
        endif;
        $query = $this->db->get_where('phome', array('phome_id' => 1));
        return $query->row_array();
    }
    
        
        public function gravar($data)
    {

            
            return $this->db->update('phome', $data);

    }
    
        public function get_current_phome() {
        $this->db->query = "SELECT phome_imagem FROM phome LIMIT 0,1;";
        $data = $this->db->fetch();
        return (isset($data[0])) ? $data[0]->phome_imagem : null;
    }
    
}