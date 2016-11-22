<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelas extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index()
    {
        $tabelas = $this->db->list_tables();
        foreach($tabelas as $tabela){
            echo heading($tabela, 3);
            $ampos = $this->db->field_data($tabela);
            foreach($campos as $campo){
                $campos[$tabela][] = $campo->name. " - " . $campo->type;
            }
            echo ul($campos[$tabela]);
        }
    }
}