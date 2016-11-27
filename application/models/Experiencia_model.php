<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencia_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all($url = FALSE)
    {
        
        if ($url === FALSE)
        {
            $query = $this->db->get('experiencia');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('experiencia');
        return $query->row_array();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('experiencia');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('experiencia', array('experiencia_id' => $id));
        return $query->row_array();
    }
    
    
    
        public function gravar($id = 0)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'experiencia_nome' => $this->input->post('experiencia_nome'),
            'experiencia_data' => $this->input->post('experiencia_data'),
            'experiencia_desc' => $this->input->post('experiencia_desc')
        );
        
        if ($id == 0) {
            return $this->db->insert('experiencia', $data);
        } else {
            $this->db->where('experiencia_id', $id);
            return $this->db->update('experiencia', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('experiencia_id', $id);
        return $this->db->delete('experiencia');
    }
}