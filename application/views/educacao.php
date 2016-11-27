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
                        <div class="panel-heading text-center">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                               <h3><?php echo $h2; ?></h3>
                               <div class="text-right">
                                   <a href="<?php echo base_url('cadastrar-educacao'); ?>" class="btn btn-w-md btn-primary">Cadastrar Novo</a>
                                </div>
                        </div>

                         
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tableExample3" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th width=100 class="text-center">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($educacao) && sizeof($educacao) > 0): ?>
                                        <?php foreach ($educacao as $ser): ?>
                                    <tr>
                                        <td class=""><?php echo $ser['educacao_nome']; ?></td>
                                        <td class="text-center">
                                         
                                    <a href="<?php echo site_url('educacao/editar/'.$ser['educacao_id']); ?>" class="btn btn-primary " ><i class="fa fa-paste"></i></a>  
                                    <button data-link="<?php echo site_url('educacao/excluir/'.$ser['educacao_id']); ?>/"
                                            class="btn btn-danger btn-remover" data-toggle="tooltip" title="Remover"><i class="fa fa-trash-o"></i>
                                    </button>
                                            
                                        </td>
                                    </tr>
                                   <?php endforeach; ?>
                                   <?php else: ?>
                                        <p class="alert alert-warning">Nenhum curso cadastrado!</p>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main content-->
           <div class="modal fade" id="modal-remove">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Remover</h4>
                    </div>
                    <div class="modal-body">
                        <p>Você está prestes à remover um item!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <a href="#" class="btn btn-danger" id="link-remover">Remover</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="<?php echo base_url('assets_painel/vendor/pacejs/pace.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/datatables/datatables.min.js'); ?>"></script>

<!-- App scripts -->
<script src="<?php echo base_url('assets_painel/scripts/luna.js'); ?>"></script>
<script type="text/javascript">
    $('#menu-educacao').addClass('active');
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
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();

                $('.btn-remover').on('click', function () {
                    $('#modal-remove').modal('show');
                    var link = $(this).data('link');
                    $('#link-remover').attr('href', link);
                });
            });
</script>

</body>

</html>