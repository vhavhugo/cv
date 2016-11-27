<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0):
            $query = $this->db->get('social');
            return $query->result_array();
        endif;
        $query = $this->db->get_where('social', array('social_id' => 1));
        return $query->row_array();
    }
        
        public function gravar($data)
    {
            return $this->db->update('social', $data);
    }

}