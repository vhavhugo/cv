<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educacao_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all($url = FALSE)
    {
        
        if ($url === FALSE)
        {
            $query = $this->db->get('educacao');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('educacao');
        return $query->row_array();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('educacao');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('educacao', array('educacao_id' => $id));
        return $query->row_array();
    }
    
    
    
        public function gravar($id = 0)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'educacao_nome' => $this->input->post('educacao_nome'),
            'educacao_data' => $this->input->post('educacao_data'),
            'educacao_desc' => $this->input->post('educacao_desc')
        );
        
        if ($id == 0) {
            return $this->db->insert('educacao', $data);
        } else {
            $this->db->where('educacao_id', $id);
            return $this->db->update('educacao', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('educacao_id', $id);
        return $this->db->delete('educacao');
    }
}