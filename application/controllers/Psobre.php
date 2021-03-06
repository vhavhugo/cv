<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psobre extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('psobre_model','psobre');
        $this->load->helper('url');
    }
    
    public function editar(){
        $id = $this->uri->segment(3);
        if (empty($id)):
            show_404();
        endif;
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Página Sobre';
        $data['psobre'] = $this->psobre->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			 $this->load->view('painel/psobre', $data);
		else:
			 $this->load->view('painel');
        endif;
    }
    
        public function create()
    {
        $id = $this->uri->segment(3);
        // definimos um nome aleatório para o diretório 
        // $folder = random_string('alpha');
        // definimos o path onde o arquivo será gravado
        $path = "./uploads/psobre/";
        // verificamos se o diretório existe
        // se não existe criamos com permissão de leitura e escrita
         if ( ! is_dir($path)):
            mkdir($path, 0777, $recursive = true);
         endif;
        // definimos as configurações para o upload
        // determinamos o path para gravar o arquivo
        $configUpload['upload_path']   = $path;
        // definimos - através da extensão - 
        // os tipos de arquivos suportados
        $configUpload['allowed_types'] = 'jpg|png|gif';
        // definimos que o nome do arquivo
        // será alterado para um nome criptografado
        // $configUpload['encrypt_name']  = TRUE;
        // overwrite - para substituir o arquivo
        $configUpload['overwrite']  = TRUE;
        $configUpload['file_name']  = "imagem";
        // passamos as configurações para a library upload
        $this->upload->initialize($configUpload);
        // verificamos se o upload foi processado com sucesso
        if ( ! $this->upload->do_upload('psobre_imagem'))
        {
            // em caso de erro retornamos os mesmos para uma variável
            // e enviamos para a 
            $data= array('error' => $this->upload->display_errors());
            // $this->load->view('home2',$data);
        }
        else
        {
            //se correu tudo bem, recuperamos os dados do arquivo
            $data['dadosArquivo'] = $this->upload->data();
            // definimos o path original do arquivo
            $arquivoPath = 'uploads/psobre'."/".$data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlArquivo'] = base_url($arquivoPath);
            // definimos a URL para download
            $downloadPath = 'download/psobre'."/".$data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlDownload'] = base_url($downloadPath);
            // carregamos a view com as informações e link para download
                $data = array(
                'psobre_titulo' => $this->input->post('psobre_titulo'),
                'psobre_sub' => $this->input->post('psobre_sub'),
                'psobre_desc' => $this->input->post('psobre_desc'),
                'psobre_imagem' => $this->upload->data('file_name')
                );  
                if($id = $this->psobre->gravar($data)):
                    // set_msg('<p>Post cadastrado com sucesso!</p>');
                   redirect( base_url() . 'psobre/editar/1');
                else:
                    echo 'não funcionou';
                    //set_msg('<p>Erro! Post não encontrado. </p>');
                endif;
        }
    }
}