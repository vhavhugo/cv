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

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/pe-icons/pe-icon-7-stroke.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/pe-icons/helper.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/stroke-icons/style.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets_painel/styles/style.css'); ?>">
</head>
<body class="blank">
 
<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="<?php echo base_url(); ?>" class="btn btn-accent">Voltar para o Site</a>
        </div>

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>

                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                      <h2><?php echo $h2; ?></h2>
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <?php
                    // if($msg = get_msg()):
                    //         echo '<div class="msg-box">'.$msg.'</div';
                    // endif;
                    $data = array('class'=>'formlogin', 'id'=>'formlogin');
                        echo form_open('/login/autentica', $data);
                        $data = array('name'=>'user_login', 'id' => 'user_login','autofocus' => 'autofocus','class' => 'form-control', 'placeholder' => 'Informe seu login');
                        echo form_input($data);
                        echo '<br/>';
                        $data = array('name'=>'user_senha','id'=>'user_senha','class' => 'form-control', 'placeholder' => 'Informe sua senha');
                        echo form_password($data);

                        echo '<br/>';
                        echo form_submit('btn_login',' Fazer login', array('class' => 'btn btn-default'));
                        echo form_close();
                    ?>
                    <!--<form action="index.html" id="loginForm" novalidate>-->
                    <!--    <div class="form-group">-->
                    <!--        <label class="control-label" for="username">Username</label>-->
                    <!--        <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">-->
                    <!--        <span class="help-block small">Your unique username to app</span>-->
                    <!--    </div>-->
                    <!--    <div class="form-group">-->
                    <!--        <label class="control-label" for="password">Password</label>-->
                    <!--        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">-->
                    <!--        <span class="help-block small">Your strong password</span>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <button class="btn btn-accent">Login</button>-->
                    <!--        <a class="btn btn-default" href="register.html">Register</a>-->
                    <!--    </div>-->
                    <!--</form>-->
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

<!-- App scripts -->
<script src="<?php echo base_url('assets_painel/scripts/luna.js'); ?>"></script>

</body>

</html>