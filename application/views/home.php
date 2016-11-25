<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $titulo ?></title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png') ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/apple-touch-icon-72x72.png') ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/images/apple-touch-icon-114x114.png') ?>">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Suranna" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Icon Fonts-->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/themify-icons.css') ?>" rel="stylesheet">
        <!-- Plugins-->
        <link href="<?php echo base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/vertical.min.css') ?>" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="<?php echo base_url('assets/css/template.css') ?>" rel="stylesheet">
    </head>
    <body>
        <!-- Show menu end-->
        <?php $this->load->view('header'); ?>
        <!-- Menu end-->
        <div class="wrapper">
            <!-- Hero section-->
            <section class="split-image parallax" data-background="<?php echo base_url('assets/images/module-7.jpg') ?>">
                <div class="split-image-footer">
                    <ul class="split-list">
                        <li>Download cv:</li>
                        <li><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
            </section>
            <!-- Hero section end-->
            <!-- Content section-->
            <section class="split-content">
                <!-- Hello text-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>Hello, I am Robert Fields<br>Designer and Front-end Developer.</h1>
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hello text end-->
                <!-- Personal info-->
                <?php $this->load->view('pessoal'); ?>
                <!-- Personal info end-->
                <!-- Services-->
                <?php $this->load->view('servicos'); ?>
                <!-- Services end-->
                
                <!-- Footer-->
                <?php $this->load->view('footer'); ?>
                <!-- Footer end-->
            </section>
            <!-- Content section end-->
        </div>
        <!-- Scripts-->
        <script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
        <script src="<?php echo base_url('assets/js/plugins.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
        <!-- Color Switcher (Remove these lines)-->
        <script src="<?php echo base_url('assets/js/style-switcher.min.js') ?>"></script>
    </body>
</html>