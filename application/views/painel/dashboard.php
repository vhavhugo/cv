<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>LUNA | Responsive Admin Theme</title>

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
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
        <?php $this->load->view('painel/header'); ?>
    <!-- End header-->

    <!-- Navigation-->
    
    <!-- End navigation-->
        <?php $this->load->view('painel/menu'); ?>
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel m-b-none">
                        <div class="panel-body">
                            <h3 class="m-b-xs"><i class="pe pe-7s-graph1 text-warning m-r-xs"></i> Dashboard <sup>ADMIN</sup></h3>
                            <hr/>
                            <p class="small">
                                <span class="c-white">Seja bem vindo: </span>
                                <?php
                                    echo ucwords($this->session->userdata('usuario_nome'));
                                ?>
                            </p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>




            <!--<div class="row">-->


            <!--    <div class="col-lg-5">-->

            <!--        <div class="panel">-->
            <!--            <div class="panel-body">-->

            <!--                <h4 class="m-t-n-sm m-b-xs">Server activity</h4>-->
            <!--                <samll>Real time geographically activity</samll>-->
            <!--                <div id="serverMap"></div>-->

            <!--                <div class="row">-->

            <!--                    <div class="col-xs-6">-->
            <!--                        <div class="panel panel-filled">-->

            <!--                            <div class="panel-body">-->
            <!--                                <h2 class="m-b-none server1">-->
            <!--                                    12%-->
            <!--                                </h2>-->
            <!--                                <div class="small">Memory usage</div>-->
            <!--                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white time">19:44:30 pm</span>  </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-xs-6">-->
            <!--                        <div class="panel panel-filled">-->
            <!--                            <div class="panel-body">-->
            <!--                                <h2 class="m-b-none server2">-->
            <!--                                    140-->
            <!--                                </h2>-->
            <!--                                <div class="small">CPU1 Usage</div>-->
            <!--                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white time">11:22:15 pm</span> </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->

            <!--                    <div class="col-xs-6">-->
            <!--                        <div class="panel panel-filled">-->

            <!--                            <div class="panel-body">-->
            <!--                                <h2 class="m-b-none server3">-->
            <!--                                    206-->
            <!--                                </h2>-->
            <!--                                <div class="small">CPU2 Usage</div>-->
            <!--                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white time">04:44:32 pm</span>  </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-xs-6">-->
            <!--                        <div class="panel panel-filled">-->
            <!--                            <div class="panel-body">-->
            <!--                                <h2 class="m-b-none server4">-->
            <!--                                    140-->
            <!--                                </h2>-->
            <!--                                <div class="small">CPU3 Usage</div>-->
            <!--                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white time">11:42:11 pm</span> </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->

            <!--                </div>-->

            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-7">-->

            <!--        <div class="panel panel-filled">-->
            <!--            <div class="panel-body">-->


            <!--                <div class="table-responsive">-->
            <!--                    <table class="table" id="logsTable">-->
            <!--                        <thead>-->
            <!--                        <tr>-->
            <!--                            <th>-->
            <!--                                Job ID-->
            <!--                            </th>-->
            <!--                            <th>-->
            <!--                                IP-->
            <!--                            </th>-->
            <!--                            <th>-->
            <!--                                Time-->
            <!--                            </th>-->
            <!--                            <th>-->
            <!--                                Value-->
            <!--                            </th>-->
            <!--                            <th>-->
            <!--                                Usage-->
            <!--                            </th>-->
            <!--                        </tr>-->
            <!--                        </thead>-->
            <!--                        <tbody>-->

            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 32.52.33.65</td>-->
            <!--                            <td> 16:55:99 pm</td>-->
            <!--                            <td> 34</td>-->
            <!--                            <td> 54%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 55.754.33.54</td>-->
            <!--                            <td> 10:33:11 pm</td>-->
            <!--                            <td> 32</td>-->
            <!--                            <td><span class="c-accent"> 24%</span></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 322.98.33.165</td>-->
            <!--                            <td> 11:21:53 pm</td>-->
            <!--                            <td> 92</td>-->
            <!--                            <td> 12%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 100.22.33.65</td>-->
            <!--                            <td> 16:55:99 pm</td>-->
            <!--                            <td> 79</td>-->
            <!--                            <td> 44%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 22.75.44.65</td>-->
            <!--                            <td> 16:55:99</td>-->
            <!--                            <td> 21</td>-->
            <!--                            <td> 61%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 12.98.67.124</td>-->
            <!--                            <td> 12:23:61</td>-->
            <!--                            <td> 33</td>-->
            <!--                            <td><span class="c-accent">11%</span></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 32.52.33.65</td>-->
            <!--                            <td> 10:43:65 pm</td>-->
            <!--                            <td> 28</td>-->
            <!--                            <td> 32%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 93.22.642.65</td>-->
            <!--                            <td> 15:33:53 pm</td>-->
            <!--                            <td> 85</td>-->
            <!--                            <td> 55%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 100.22.33.65</td>-->
            <!--                            <td> 16:55:99 pm</td>-->
            <!--                            <td> 79</td>-->
            <!--                            <td> 44%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 22.75.44.65</td>-->
            <!--                            <td> 16:55:99</td>-->
            <!--                            <td> 21</td>-->
            <!--                            <td> 61%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 22.52.33.421</td>-->
            <!--                            <td> 14:33:99 pm</td>-->
            <!--                            <td> 93</td>-->
            <!--                            <td><span class="c-accent"> 71%</span></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 132.21.32.625</td>-->
            <!--                            <td> 16:55:44 pm</td>-->
            <!--                            <td> 32</td>-->
            <!--                            <td><span class="c-accent"> 10%</span></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 32.52.33.65</td>-->
            <!--                            <td> 17:66:55 pm</td>-->
            <!--                            <td> 34</td>-->
            <!--                            <td> 8%</td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <td> 43 AT_DFrtVs</td>-->
            <!--                            <td> 93.22.642.65</td>-->
            <!--                            <td> 15:33:53 pm</td>-->
            <!--                            <td> 85</td>-->
            <!--                            <td> 55%</td>-->
            <!--                        </tr>-->


            <!--                        </tbody>-->
            <!--                    </table>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->


            <!--    </div>-->
            <!--</div>-->


        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="<?php echo base_url('assets_painel/vendor/pacejs/pace.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/d3/d3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/topojson/topojson.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/datamaps/datamaps.world.min.js'); ?>"></script>
<script src="<?php echo base_url('assets_painel/vendor/moment/moment.js'); ?>"></script>


<!-- App scripts -->
<script src="<?php echo base_url('assets_painel/scripts/luna.js'); ?>"></script>

<script>
    $(document).ready(function () {


        // Fiunction to generate random text - for demo purpose
        function simpleText()
        {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }


        // Function to generate new table row with random data
        function generate() {

            var now = new moment();
            var endTime = now.format("HH:mm:ss a");

            var number0 = Math.floor(Math.random() * 100) + 1;
            var number1 = Math.floor(Math.random() * 100) + 1;
            var number2 = Math.floor(Math.random() * 100) + 1;
            var number3 = Math.floor(Math.random() * 100) + 1;
            var number4 = Math.floor(Math.random() * 100) + 1;
            var number5 = Math.floor(Math.random() * 100) + 1;
            var number6 = Math.floor(Math.random() * 100) + 1;

            var usage = number6 + '%';

            if (number6 > 50) {
                usage = '<span class="c-accent">' + usage + '%</span>';
            }

            $('#logsTable tbody tr:first').remove();

            $('#logsTable').append('<tr><td>'+ number0 + ' AT_' + simpleText() + '</td><td>' + number1 +'.'+number2 +'.'+number3 +'.' +number4+ '</td><td>' + endTime +'</td>' + '<td>' + number5 +'</td><td>'+ usage + '</td></tr>');

            $('.time').text(endTime);
            $('.server1').text(number1 + '%');
            $('.server2').text(number2);
            $('.server3').text(number3);
            $('.server4').text(number4);

        }

        // Run interval function
        logsInterval = setInterval(generate, 600);


        // Set map options and initialise DataMap plugin
        var wordmap = new Datamap({
            element: document.getElementById("serverMap"),
            fills: {
                defaultFill: "#3B3D46",
                active: "#F8A900"
            },
            responsive: true,
            geographyConfig: {
                highlightOnHover: false,
                borderWidth: 0

            },
            data: {
                USA: { fillKey: "active" },
                RUS: { fillKey: "active" }
            }

        });


        // Resize map on window resize
        $(window).on('resize', function() {
            setTimeout(function(){
                wordmap.resize();
            },100)
        });


        // Function for map color changes
        function mapChanges() {

            var random = Math.floor(Math.random() * 100) + 1;
            var random2 = Math.floor(Math.random() * 100) + 1;
            var random3 = Math.floor(Math.random() * 100) + 1;
            var random4 = Math.floor(Math.random() * 100) + 1;
            var random5 = Math.floor(Math.random() * 100) + 1;

            var usa = "defaultFill",
                    rus = "defaultFill",
                    aus = "defaultFill",
                    bra = "defaultFill",
                    ind = "defaultFill";

            if (random > 50) {  usa = 'active'} else { usa = 'defaultFill'}
            if (random2 > 50) { rus = 'active'} else { rus = 'defaultFill'}
            if (random3 > 50) { aus = 'active'} else { aus = 'defaultFill'}
            if (random4 > 50) { bra = 'active'} else { bra = 'defaultFill'}
            if (random5 > 50) { ind = 'active'} else { ind = 'defaultFill'}

            wordmap.updateChoropleth({
                USA: { fillKey: usa },
                RUS: { fillKey: rus },
                AUS: { fillKey: aus },
                BRA: { fillKey: bra },
                IND: { fillKey: ind }

            });

        }

        // Run interval map function
        mapInterval = setInterval(mapChanges, 600);

    });
</script>

</body>

</html>