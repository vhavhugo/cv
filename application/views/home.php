<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Título do Site</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Suranna" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icon Fonts-->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/themify-icons.css" rel="stylesheet">
        <!-- Plugins-->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/css/vertical.min.css" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="assets/css/template.css" rel="stylesheet">
    </head>
    <body>
        <!-- Preloader-->
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- Preloader end-->
        <!-- Show menu-->
        <div class="show-menu-btn">
			<span></span>
			<span></span>
			<span></span>
        </div>
        <!-- Show menu end-->
        <?php $this->load->view('header'); ?>
        <!-- Menu end-->
        <div class="wrapper">
            <!-- Hero section-->
            <section class="split-image parallax" data-background="assets/images/module-7.jpg">
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
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6>Personal Info.</h6>
                            </div>
                            <div class="col-sm-8">
                                <ul>
                                    <li>Name: Robert Fields</li>
                                    <li>Birthdate: September 28, 1990</li>
                                    <li>Address: 122 King St, Melbourne VIC</li>
                                    <li>Phone: +44 1234 56 78</li>
                                    <li>E-mail: <a href="#">info@yourdomain.com</a></li>
                                    <li>Website: <a href="#">mysite.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Personal info end-->
                <!-- Services-->
                <?php $this->load->view('servicos'); ?>
                <!-- Services end-->
                <!-- Professional skills-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6>Professional skills.</h6>
                            </div>
                            <div class="col-sm-8">
                                <!-- Progress bar-->
                                <div class="progress-item">
                                    <div class="progress-title">Design, <span class="p-coutn"></span>%</div>
                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- Progress bar end-->
                                <!-- Progress bar-->
                                <div class="progress-item">
                                    <div class="progress-title">Branding, <span class="p-coutn"></span>%</div>
                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- Progress bar end-->
                                <!-- Progress bar-->
                                <div class="progress-item">
                                    <div class="progress-title">Websites, <span class="p-coutn"></span>%</div>
                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="100" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- Progress bar end-->
                                <!-- Progress bar-->
                                <div class="progress-item">
                                    <div class="progress-title">Publishing, <span class="p-coutn"></span>%</div>
                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="40" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- Progress bar end-->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Professional skills end-->
                <!-- Counters-->
                <section class="module">
                    <div class="container-fluid container-custom">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6>My Experience.</h6>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <!-- Counter-->
                                    <div class="col-xs-6">
                                        <div class="counter">
                                            <h2 class="counter-number"><span class="counter-timer" data-from="0" data-to="12000">0</span></h2>
                                            <div class="counter-title">Theme Users</div>
                                        </div>
                                    </div>
                                    <!-- Counter end-->
                                    <!-- Counter-->
                                    <div class="col-xs-6">
                                        <div class="counter">
                                            <h2 class="counter-number"><span class="counter-timer" data-from="0" data-to="8">0</span></h2>
                                            <div class="counter-title">Total downloads</div>
                                        </div>
                                    </div>
                                    <!-- Counter end-->
                                    <!-- Counter-->
                                    <div class="col-xs-6">
                                        <div class="counter">
                                            <h2 class="counter-number"><span class="counter-timer" data-from="0" data-to="18">0</span></h2>
                                            <div class="counter-title">Design experiments</div>
                                        </div>
                                    </div>
                                    <!-- Counter end-->
                                    <!-- Counter-->
                                    <div class="col-xs-6">
                                        <div class="counter">
                                            <h2 class="counter-number"><span class="counter-timer" data-from="0" data-to="64">0</span></h2>
                                            <div class="counter-title">Launched startups</div>
                                        </div>
                                    </div>
                                    <!-- Counter end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counters end-->
                <!-- Footer-->
                <?php $this->load->view('footer'); ?>
                <!-- Footer end-->
            </section>
            <!-- Content section end-->
        </div>
        <!-- Scripts-->
        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/custom.min.js"></script>
        <!-- Color Switcher (Remove these lines)-->
        <script src="assets/js/style-switcher.min.js"></script>
    </body>
</html>