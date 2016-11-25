<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Hugo do Valle">
        <title><?php echo $titulo; ?></title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/apple-touch-icon-72x72.png'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/images/apple-touch-icon-114x114.png'); ?>">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Suranna" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Icon Fonts-->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/themify-icons.css'); ?>" rel="stylesheet">
        <!-- Plugins-->
        <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/vertical.min.css'); ?>" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="<?php echo base_url('assets/css/template.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- Menu-->
        <?php $this->load->view('header'); ?>
        <!-- Menu end-->
        <div class="wrapper">
            <!-- Hero section-->
            <section class="split-image parallax" data-background="<?php echo base_url('assets/images/module-10.jpg'); ?>"></section>
            <!-- Hero section end-->
            <!-- Content section-->
            <section class="split-content">
                <!-- Page title-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>Let´s Talk About Your Project.</h1>
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Page title end-->
                <!-- MAP-->
                <div class="maps-container">
                    <div id="map" data-addresses="[48.859822, 2.352647],[47.394930, 0.683666]" data-info="[Lorem ipsum dolor sit amet.],[Lorem ipsum dolor sit amet.]" data-icon="assets/images/map-icon.png" data-zoom="5"></div>
                </div>
                <!-- END MAP-->
                <!-- Reach me-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6>Reach me.</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6>Phone:</h6>
                                <ul>
                                    <li>+44 1234 56 78</li>
                                    <li>+13 1234 46 88</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h6>E-mail:</h6>
                                <ul>
                                    <li><a href="#">info@yourdomain.com</a></li>
                                    <li><a href="#">info@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Reach me end-->
                <!-- Contatc form-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6>Envie uma mensagem</h6>
                            </div>
                            <div class="col-sm-8">
                                <?php  
                                    if($formerror):
                                        echo '<p>'.$formerror.'</p>';
                                    endif;
                                    echo form_open('pagina/contato', array('class' => 'form-group'));
                                    echo form_input('nome', set_value('nome'), array('class' => 'form-control', 'placeholder' => 'Informe seu nome'));
                                    echo '<br/>';
                                    echo form_input('email', set_value('email'), array('class' => 'form-control', 'placeholder' => 'Informe seu email'));
                                    echo '<br/>';
                                    echo form_input('assunto', set_value('assunto'), array('class' => 'form-control', 'placeholder' => 'Informe o assunto'));
                                    echo '<br/>';
                                    echo form_textarea('mensagem', set_value('mensagem'), array('class' => 'form-control', 'placeholder' => 'Sua mensagem'));
                                    echo '<br/>';
                                    echo form_submit('enviar', 'Enviar mensagem >>', array('class' => 'btn btn-brand botao'));
                                    echo form_close();
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contatc form end-->
                <!-- Footer-->
                <?php $this->load->view('footer'); ?>
                <!-- Footer end-->
            </section>
            <!-- Content section end-->
        </div>
        <!-- Scripts-->
        <script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
        <script src="<?php echo base_url('assets/js/plugins.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
        <!-- Color Switcher (Remove these lines)-->
        <script src="<?php echo base_url('assets/js/style-switcher.min.js'); ?>"></script>
    </body>
</html>