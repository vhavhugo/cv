<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracao_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    
    public function get_by_id($id = 0)
    {
        if ($id === 0):
            $query = $this->db->get('config');
            return $query->result_array();
        endif;
        $query = $this->db->get_where('config', array('config_id' => 1));
        return $query->row_array();
    }
    
// function gravar($id = 1) {
    
//     $this->db->where('config_id', $id);
//     return $this->db->update('config',$data);
// }

       public function gravar($data)
    {

            return $this->db->update('config', $data);

    }
    
}