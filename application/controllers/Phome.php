<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('phome_model','phome');
        $this->load->helper('url');
   

        

    }
    
    public function editar(){
        $id = $this->uri->segment(3);
        if (empty($id)):
            show_404();
        endif;
        $data['titulo'] = 'ADMIN - CV';
        $data['h2'] = 'Página Home';
        $data['phome'] = $this->phome->get_by_id($id);
            $sess = $this->session->userdata("_LOGIN");
            if(isset($sess)):
			 $this->load->view('painel/phome', $data);
		else:
			 $this->load->view('painel');
		
        endif;
    }
    
        public function create()
    {
    //  print_r($_POST);exit;  
        $id = $this->uri->segment(3);
           // Método que processar o upload do arquivo

 
        // Método que processar o upload do arquivo

 
        // definimos um nome aleatório para o diretório 
        $folder = random_string('alpha');
        // definimos o path onde o arquivo será gravado
        $path = "./uploads/phome/";
 
        // verificamos se o diretório existe
        // se não existe criamos com permissão de leitura e escrita
    //     if ( ! is_dir($path)) {
    //     mkdir($path, 0777, $recursive = true);
    // }
 
        // definimos as configurações para o upload
        // determinamos o path para gravar o arquivo
        $configUpload['upload_path']   = $path;
        // definimos - através da extensão - 
        // os tipos de arquivos suportados
        $configUpload['allowed_types'] = 'jpg|png|gif';
        // definimos que o nome do arquivo
        // será alterado para um nome criptografado
        // $configUpload['encrypt_name']  = TRUE;
        $configUpload['overwrite']  = TRUE;
        $configUpload['file_name']  = "imagem";
    
        
 
        // passamos as configurações para a library upload
        $this->upload->initialize($configUpload);
 
        // verificamos se o upload foi processado com sucesso
        if ( ! $this->upload->do_upload('phome_imagem'))
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
            $arquivoPath = 'uploads/phome'."/".$data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlArquivo'] = base_url($arquivoPath);
            // definimos a URL para download
            $downloadPath = 'download/phome'."/".$data['dadosArquivo']['file_name'];
            // passando para o array '$data'
            $data['urlDownload'] = base_url($downloadPath);
 
            // carregamos a view com as informações e link para download
            // $this->load->view('download',$data);
        
    
    
        
        
        
        
        //      $this->load->helper('upload');
        //       $this->load->helper('post');
        //     //   print_r($_FILES);exit;
        // if (isset($_FILES['phome_imagem']) && !empty($_FILES['phome_imagem']['name'])) {

        //     $this->phome_imagem = Upload::Phome($_FILES['config_foto'], "phome/");
        //     Post::add('phome_imagem', $this->phome_imagem);
        //     $current_phome = (new phome)->get_current_phome();
        //     $midia = explode("/controller", __DIR__);
        //     $current_phome = $midia[0] . "/midias/phome/$current_phome";
        //     unlink($current_phome);
        // }
        // $config['upload_path'] = './midias/phome/';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']	= '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';

        // $this->load->library('upload', $config);
        // $field_name = "some_field_name";

        
        // $this->load->library('upload', config_upload());
        //  if($this->upload->do_upload('phome_imagem')):
        //  //upload executado
        // $dados_upload = $this->upload->data();
        // endif;

//             $this->load->library('upload', config_upload());
// echo '1';exit;
//              if($this->upload->do_upload('phome_imagem')):
                //upload executado
                // $dados_upload = $this->upload->data();
                // $data = $this->input->post();
                $data = array(
                'phome_titulo' => $this->input->post('phome_titulo'),
                'phome_sub' => $this->input->post('phome_sub'),
                'phome_desc' => $this->input->post('phome_desc'),
                'phome_imagem' => $this->upload->data('file_name')
                );  
                if($id = $this->phome->gravar($data)):
                    // set_msg('<p>Post cadastrado com sucesso!</p>');
                   redirect( base_url() . 'phome/editar/1');
                else:
                    echo 'não funcionou';
                    //set_msg('<p>Erro! Post não encontrado. </p>');
                endif;

             
            // endif;
            
            // print_r($data);exit;
        // $data = array(
        //     'phome_titulo' => $dados_form('phome_titulo'),
        //     'phome_sub' => $dados_form('phome_sub'),
        //     'phome_desc' => $dados_form('phome_desc'),
        //     // 'phome_imagem' => 
        //     // 'phome_imagem' => $this->upload->data()
        // );
        
        // $this->upload->do_upload('phome_imagem');

        // $this->phome->gravar($data);
        }
       
    }
  
 
    // Método que fará o download do arquivo
    public function Download(){
        // recuperamos o terceiro segmento da url, que é o nome do arquivo
        $arquivo = $this->uri->segment(3);
        // recuperamos o segundo segmento da url, que é o diretório
        $diretorio = $this->uri->segment(2);
        // definimos original path do arquivo
        $arquivoPath = './uploads/phome'."/".$arquivo;
 
        // forçamos o download no browser 
        // passando como parâmetro o path original do arquivo
        force_download($arquivoPath,null);
    }
}