<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all($url = FALSE)
    {
        
        if ($url === FALSE)
        {
            $query = $this->db->get('servicos');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('servicos');
        return $query->row_array();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('servicos');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('servicos', array('servicos_id' => $id));
        return $query->row_array();
    }
    
    
    
        public function gravar($id = 0)
    {
        $id = $this->uri->segment(3);

        $data = array(
            'servicos_nome' => $this->input->post('servicos_nome')
        );
        
        if ($id == 0) {
            return $this->db->insert('servicos', $data);
        } else {
            $this->db->where('servicos_id', $id);
            return $this->db->update('servicos', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('servicos_id', $id);
        return $this->db->delete('servicos');
    }
}