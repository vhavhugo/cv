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
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                               <?php echo $h2; ?>
                               <div class="text-right">
                                   <a href="<?php echo base_url('blog/listar'); ?>" class="btn btn-w-md btn-primary">Voltar para lista</a>
                                </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                               <?php
                               echo form_open_multipart();
                               echo form_label('Título: ', 'blog_titulo', array('class' => 'form-group'));
                               echo form_input('blog_titulo', set_value('blog_titulo'), array('class' => 'form-control'));
                               echo '<br/>';
                               echo form_label('Sub-Título: ', 'blog_subtitulo');
                               echo form_input('blog_subtitulo', set_value('blog_subtitulo'), array('class' => 'form-control'));
                               echo '<br/>';
                               echo form_label('Conteúdo: ', 'blog_descricao');
                               echo form_textarea('blog_descricao', to_html(set_value('blog_desricao')), array('class' => 'form-control summernote'));
                               echo '<br/>';
                               echo form_label('Imagem do Post: ', 'blog_imagem');
                               echo form_upload('blog_imagem');
                                // <button class="btn btn-default " type="button"><i class="fa fa-upload"></i> <span class="bold">Upload</span></button>
                               echo '<br/>';
                               echo form_submit('enviar','Salvar Post', array('class' => 'btn btn-w-md btn-primary btn-block'));
                              echo form_close();
                                ?>
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
    $('.summernote').summernote({
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