<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Upload {


    static public function Phome($file) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "phome" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            echo json_encode(array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!"));
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            echo json_encode(array('mensagem' => "Erro ao fazer upload!"));
        }
    }

    static public function Foto($file) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "fotos" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            echo json_encode(array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!"));
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            echo json_encode(array('mensagem' => "Erro ao fazer upload!"));
        }
    }

    static public function Corretor($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "corretor" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Posts($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "posts" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Depoimento($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "depoimento" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Item($file) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "item" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Parceiro($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "parceiro" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Servico($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "servico" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Slide($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "slide" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Contato($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "contato" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Logo($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "logo" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Marca($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "marca" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function Icon($file, $current = null) {
        $midia = explode(DIRECTORY_SEPARATOR . "helpers", __DIR__);
        $midia = $midia[0] . DIRECTORY_SEPARATOR . "midias" . DIRECTORY_SEPARATOR . "icon" . DIRECTORY_SEPARATOR;
        $extensao = Upload::get_extensao($file['name']);
        $arquivo_extensao = Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        $destino = $midia . Filter::slug(basename($file['name'])) . "_" . time() . ".$extensao";
        //verifica se o arquivo enviado é uma imagem
        $check = getimagesize($file["tmp_name"]);
        if ($check === false || !isset($check['mime'])) {
            $dados = array('mensagem' => "Erro ao fazer upload - O arquivo deve ser uma imagem!");
            Tpl::View('adm/erro/upload', $dados);
            exit;
        }
        if (move_uploaded_file($file['tmp_name'], $destino)) {
            return $arquivo_extensao;
        } else {
            Tpl::view('adm/erro/upload');
            exit;
        }
    }

    static public function get_extensao($file) {
        $ext = explode(".", $file);
        return $ext[count($ext) - 1];
    }

}
