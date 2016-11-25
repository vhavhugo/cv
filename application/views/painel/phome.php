<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title><?php echo $titulo; ?></title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/vendor/fontawesome/css/font-awesome.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/vendor/animate.css/animate.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/vendor/bootstrap/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/vendor/datatables/datatables.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/vendor/summernote/summernote.css'); ?>"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/pe-icons/pe-icon-7-stroke.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/pe-icons/helper.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/stroke-icons/style.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/btn-upload.css'); ?> "/>	
</head>
<body>
<!-- Wrapper-->
<div class="wrapper">
    <!-- Header-->
       <?php $this->load->view('painel/header'); ?>
    <!-- End header-->
    <!-- Navigation-->
        <?php $this->load->view('painel/menu'); ?>
    <!-- End navigation-->
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <div class="panel-heading text-center">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            <h3><?php echo $h2; ?></h3>
                        </div>
                    
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php echo validation_errors(); ?>
                                    <?php
                                    $dados = array('enctype' => 'multipart/form-data');
                                     echo form_open_multipart('phome/create/1', $dados); 
                                    //  echo form_upload("file");
                                    //  echo form_submit("upload",'')
                                     
                                     ?>
                                
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group">
                                            <label for="phome_titulo">Título</label> 
                                            <input type="input" name="phome_titulo" class="form-control" id="phome_titulo" placeholder="Informe o título"
                                             value="<?php echo $phome['phome_titulo'] ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="phome_sub">Sub-título</label> 
                                            <input type="input" name="phome_sub" class="form-control" id="phome_sub" placeholder="Informe o sub-título"
                                             value="<?php echo $phome['phome_sub'] ?>"/>
                                        </div>

                                    </div>
                                   <div class="col-md-2 col-sm-2 col-xs-12 text-center form-group">
                                        <label><small>220 w x 110 h (pixels)</small></label>
                                        <div class="form-group">
                                            <?php if ($phome['phome_imagem'] != "" ): ?>
                                                <img src="<?= base_url() ?>uploads/thumb.php?zcc=1&w=440&h=250&src=phome/<?= $phome['phome_imagem'] ?>" alt="..." id="img-foto-antes" class="img-thumbnail img-responsive">
                                            <?php else : ?>
                                                 <img src="<?= base_url() ?>uploads/thumb.php?zcc=1&w=440&h=250&src=sem-foto/sem-imagem.jpg" alt="Foto" class="img-responsive"/>
                                            <?php endif; ?>
                                        </div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn btn-primary btn-file btn-block">
                                                <span class="fileinput-exists">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    Trocar Foto
                                                </span>
                                                <input type="file" id="phome_imagem" name="phome_imagem" class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="phome_desc">Descricao</label> 
                                            <textarea type="textarea" name="phome_desc" class="form-control" id="phome_desc">
                                             <?php echo $phome['phome_desc'] ?>
                                             </textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" value="Atualizar" class="btn btn-w-md btn-primary" />
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
    </section>
    <!-- End main content-->
</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="<?php echo base_url('assets_painel/vendor/pacejs/pace.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/datatables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/summernote/summernote.js'); ?>"></script>

<!-- App scripts -->
<script src="<?php echo base_url('assets_painel/scripts/luna.js'); ?>"></script>
<script>
    $('#phome_desc').summernote({
        height: 200
    });
</script>

<script>
    $(document).ready(function () {

        $('#tableExample1').DataTable({
            "dom": 't'
        });

        $('#tableExample2').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [ [6, 25, 50, -1], [6, 25, 50, "All"] ],
            "iDisplayLength": 6,
        });

        $('#tableExample3').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

    });
</script>
</body>
</html>