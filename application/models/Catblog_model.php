<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catblog_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_all($url = FALSE)
    {
        if ($url === FALSE)
        {
            $query = $this->db->get('catblog');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('catblog', array('catblog_url' => $url));
        return $query->row_array();
    }
    
    public function get_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('catblog');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('catblog', array('catblog_id' => $id));
        return $query->row_array();
    }
    
    
    
        public function gravar($id = 0)
    {
        $id = $this->uri->segment(3);
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('catblog_nome'), 'dash', TRUE);
 
        $data = array(
            'catblog_nome' => $this->input->post('catblog_nome'),
            'catblog_url' => $slug,
        );
        
        if ($id == 0) {
            return $this->db->insert('catblog', $data);
        } else {
            $this->db->where('catblog_id', $id);
            return $this->db->update('catblog', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('catblog_id', $id);
        return $this->db->delete('catblog');
    }
}