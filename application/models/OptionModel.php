<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OptionModel extends CI_Model {

    function __construct(){
        parent::__construct();
    }

        //Verificar se teve resultado no banco
        //num_rows numero de linhas
    public function get_option($option_name)
    {
        $this->db->where('option_name', $option_name);
        $query = $this->db->get('options', 1);

        if($query->num_rows() == 1):
            $row = $query->row();
            return $row->option_value;
        else:
            return NULL;
        endif;
    }
    
        public function update_option($option_name, $option_value)
    {
        $this->db->where('option_name', $option_name);
        $query = $this->db->get('options', 1);

        if($query->num_rows() == 1):
            $this->db->set('option_value', $option_value);
            $this->db->where('option_name', $option_name);
            $this->db->update('option');
            return $this->db->affected_rows();
        else:
            $dados = array(
                'option_name' => $option_name,
                'option_value' => $option_value
                );
                $this->db->insert('option',$dados);
                return $this->db->insert_id();
        endif;
    }

}