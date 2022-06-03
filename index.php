<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gas Top-up &mdash; Get products where it's available. </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Know where petroleum products are available and cheaper."/>
    <meta name="keywords" content="Fuel, Kerosene, Gas, Diesel, product"/>
    <meta name="author" content="LOVE"/>


    <script src="core_files/js/jquery/jquery-3.2.1.js"></script>

    <!-- Main JS -->
    <script src="core_files/js/my_own/main_site.js"></script>


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Animate.css -->
    <link rel="stylesheet" href="core_files/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="core_files/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="core_files/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="core_files/css/superfish.css">

    <link rel="stylesheet" href="core_files/css/style.css">


    <script src="core_files/js/modernizr-2.6.2.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left fh5co-link">
                        <a href="#">FAQ</a>
                        <a href="#">Forum</a>
                        <a href="#">Contact</a>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right fh5co-social">
                        <a href="#" class="grow"><i class="icon-facebook2"></i></a>
                        <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                        <a href="#" class="grow"><i class="icon-instagram2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>

                    <h1 id="fh5co-logo"><a href="./"><img src="img/main/gastopup_logo.png"
                                                          style="width: 60px; height: 60px;" alt="GSL logo"/> Gas Top-up</a>
                    </h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="products/">Products</a></li>
                            <li><a href="stations/">Gas Stations</a></li>
                            <li><a href="maps/">Maps</a></li>
                            <li><a href="contact/">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
                 style="background-image: url(img/gas_station_images/total.jpg);">
                <div class="desc animate-box">
                    <h2><strong>Welcome to Gas Top-up</strong></h2>
                    <span>Check where petroleum products are available and at cheaper rates.</span>
                    <span class="text-center animate-box">
					<div>
                        <form class="form" method="get" action="products/">
                            <div>
                                <center><input style="width: 300px; text-align:center;" name="product-type"
                                               class="form-control" type="text" placeholder="Enter query to search..."/>
                                </center>
                            </div>
                            <!--                            <select name="location">-->
                            <!--                                <option value="" selected>Gkkhkkhk</option>-->
                            <!--                            </select>-->




                            <div>
                                <input style="margin-top: 20px" type="submit" class="btn btn-primary btn-lg" value="SEARCH"/> </center>
                            </div>
                        </form>
                    </div>
					</span>
                </div>
            </div>

        </div>
        <!-- end:header-top -->

        <div class="container">
            <div class="our-services">

                <div class="service-header-intro" style="margin-top:20px;">
                    <h2 class="service-heading">Product's Availability at a glance</h2>

                    <p>Which product do you want to check for its availability?</p>
                </div>

                <div id="product_glance">
                    <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                        <i style="color:#de9000;" class="service-for-icon icon-drop"></i>

                        <h3>FUEL</h3>

                        <p id="gas_station_count_fuel"></p>

                        <script>
                            // QUERY HOW MANY STATIONS HAVE FUEL
                            setInterval(function () {
                                count_product_avail('fuel', 'gas_station_count_fuel');
                            }, 1000);
                        </script>

                        <a href="products/?product-type=fuel" class="btn btn-primary btn-lg">View</a>
                    </div>
                    <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                        <i style="color:#5a5ab9;" class="service-for-icon icon-drop"></i>

                        <h3>KEROSENE</h3>

                        <p id="gas_station_count_kerosene"></p>
                        <script>
                            // QUERY HOW MANY STATIONS HAVE FUEL
                            setInterval(function () {
                                count_product_avail('kerosene', 'gas_station_count_kerosene');
                            }, 1000);
                        </script>
                        <a href="products/?product-type=kerosene" class="btn btn-primary btn-lg">View</a>
                    </div>
                    <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                        <i style="color:#9b399b;" class="service-for-icon icon-drop"></i>

                        <h3>DIESEL</h3>

                        <p id="gas_station_count_diesel"></p>
                        <script>
                            // QUERY HOW MANY STATIONS HAVE FUEL
                            setInterval(function () {
                                count_product_avail('diesel', 'gas_station_count_diesel');
                            }, 1000);
                        </script>
                        <a href="products/?product-type=diesel" class="btn btn-primary btn-lg">View</a>
                    </div>
                    <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                        <i style="color:#dddddd;" class="service-for-icon icon-drop"></i>

                        <h3>COOKING GAS</h3>

                        <p id="gas_station_count_gas"></p>
                        <script>
                            // QUERY HOW MANY STATIONS HAVE FUEL
                            setInterval(function () {
                                count_product_avail('gas', 'gas_station_count_gas');
                            }, 1000);
                        </script>
                        <a href="products/?product-type=gas" class="btn btn-primary btn-lg">View</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="panel panel-warning" style="width: 700px; padding:0px;  margin-left:auto; margin-right:auto;">
    <iframe
            width="700"
            height="500"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCfoPwLkmOx0WUKC2mMgSkLF3EThXLBSS4&q=gas+stations,+yenagoa&zoom=12">
    </iframe>
</div>

<!-- fh5co-blog-section -->
<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <ul style="list-style: none;">
                        <h3 class="section-title white-fg">Useful links</h3>
                        <li class="footer_useful_links"><a href="./"> Home</a></li>
                        <li class="footer_useful_links"><a href="products/"> Products</a></li>
                        <li class="footer_useful_links"><a href="stations/"> Gas Stations</a></li>
                        <li class="footer_useful_links"><a href="contact/"> Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-4 animate-box">
                    <ul class="contact-info" style="list-style: none;">
                        <h3 class="section-title  white-fg">Our Address</h3>
                        <li class="footer_useful_links"><i class="icon-map-marker"></i> 48 Isaac Boro Express-Way
                            Yenagoa, Bayelsa State.
                        </li>
                        <li class="footer_useful_links"><i class="icon-phone"></i> +2341230000000</li>
                        <li class="footer_useful_links"><i class="icon-envelope"></i><a href="#"> info@gastopup.com</a>
                        </li>
                        <li class="footer_useful_links"><i class="icon-globe2"></i><a href="#"> www.gastopup.com</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row copy-right">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>

                    <p> &copy; Copyright 2018 gastop-up.com </p>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="core_files/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="core_files/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="core_files/s/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="core_files/js/jquery.waypoints.min.js"></script>
<script src="core_files/js/sticky.js"></script>

<!-- Stellar -->
<script src="core_files/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="core_files/js/hoverIntent.js"></script>
<script src="core_files/js/superfish.js"></script>

<!-- Main JS -->
<script src="core_files/js/main.js"></script>


</body>
</html>

