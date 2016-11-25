<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psobre_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0):
            $query = $this->db->get('psobre');
            return $query->result_array();
        endif;
        $query = $this->db->get_where('psobre', array('psobre_id' => 1));
        return $query->row_array();
    }
        
        public function gravar($data)
    {
            return $this->db->update('psobre', $data);
    }
        public function get_current_psobre() {
        $this->db->query = "SELECT psobre_imagem FROM psobre LIMIT 0,1;";
        $data = $this->db->fetch();
        return (isset($data[0])) ? $data[0]->psobre_imagem : null;
    }
}