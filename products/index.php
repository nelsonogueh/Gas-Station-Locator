<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<?php
include_once("../php_scripts/_initialize.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gas Top-up &mdash; Get products where it's available. </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Know where petroleum products are available and cheaper."/>
    <meta name="keywords" content="Fuel, Kerosene, Gas, Diesel, product"/>
    <meta name="author" content="LOVE"/>


    <script src="../core_files/js/jquery/jquery-3.2.1.js"></script>

    <!-- Main JS -->
    <script src="../core_files/js/my_own/main_site.js"></script>


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../core_files/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../core_files/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../core_files/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="../core_files/css/superfish.css">

    <link rel="stylesheet" href="../core_files/css/style.css">


    <!-- Modernizr JS -->
    <script src="../core_files/js/modernizr-2.6.2.min.js"></script>
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

                    <h1 id="fh5co-logo"><a href="../"><img src="../img/main/gastopup_logo.png"
                                                           style="width: 60px; height: 60px;" alt="GSL logo"/> Gas
                            Top-up</a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li><a href="../">Home</a></li>
                            <li class="active"><a href="./">Products</a></li>
                            <li><a href="../stations/">Gas Stations</a></li>
                            <li><a href="../maps/">Maps</a></li>
                            <li><a href="../contact/">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- end:header-top -->

        <div class="container">
            <div class="our-services">

                <?php
                if (isset($_REQUEST['product-type'])) {

                    $product_name = mysqli_real_escape_string($conn, $_REQUEST['product-type']);

                    $query = mysqli_query($conn, "SELECT * FROM product_availability WHERE product_availability.Product_Id =  (SELECT Product_Id FROM products WHERE products.Product_Generic_Name LIKE '%" . $product_name . "%') AND  product_availability.Product_Status='available'") or mysqli_error($conn);
//
                    //$query = mysqli_query($conn, "SELECT * FROM product_availability WHERE product_availability.Product_Id = (SELECT Product_Id FROM products WHERE products.Product_Generic_Name='$product_name') AND  product_availability.Product_Status='available'") or mysql_error();
                    $count = mysqli_num_rows($query);
                    ?>
                    <div class="our-services">
                        <div class="service-header-intro">
                            <h2 class="service-heading">Product's Availability and price</h2>

                            <p <?php if ($count > 0) {
                                echo 'class="alert alert-info"';
                            } else {
                                echo 'class="alert alert-danger"';
                            } ?> >Found <?php echo $count; ?> record<?php if ($count > 1) {
                                    echo "s";
                                } ?> for product "<b><?php echo $product_name; ?>"</b></p>
                        </div>

                        <div id="product_glance">
                            <?php if ($count > 0) {
                                while ($row = mysqli_fetch_array($query)) {

                                    $station_id = $row['Station_Id'];

                                    $query_name = mysqli_query($conn, "SELECT * FROM gas_stations WHERE Station_Id='$station_id'");
                                    if (mysqli_num_rows($query_name) > 0) {
                                        $this_row = mysqli_fetch_array($query_name);
                                        $station_name = $this_row['Station_Name'];
                                        $station_address = $this_row['Station_Address'];
                                        $station_phone = $this_row['Station_Phone'];
                                        $station_email = $this_row['Station_Email'];
                                        $station_website = $this_row['Station_Website'];

                                        $price = $row['Price'];
                                        $date_updated = $row['Date_Added'];
                                        $time_updated = $row['Time_Added'];
                                        ?>
                                        <div class="" style="background-color: white;">
                                            <div style="float: left;">
                                                <?php
                                                if (trim(station_image($station_id, $conn)) != "no_image") {
                                                    ?>
                                                    <img
                                                        class="box-shadow-light img img-thumbnail img-responsive col-xs-12"
                                                        src="<?php echo station_image($station_id, $conn); ?>"
                                                        style="max-width: 500px; max-height: 400px; border-radius: 8px;"
                                                        alt=""/>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img
                                                        class="box-shadow-light img img-thumbnail img-responsive col-xs-12"
                                                        src="../img/gas_station_images/general_station.jpg"
                                                        style="max-width: 500px; max-height: 400px; border-radius: 8px;"
                                                        alt=""/>
                                                    <?php
                                                } ?>
                                            </div>
                                            <div
                                                class="col-md-6 border-left-<?php echo $product_name; ?>   box-shadow-light radius_box"
                                                style="float: left;">
                                                <div class="">
                                                    <h3 style="text-align: center;"><a
                                                            href="../stations/?station-name=<?php echo $station_name; ?>"><?php echo $station_name; ?></a>
                                                    </h3>
                                                    <br/>

                                                    <div>
                                                        <i class="icon-drop icon-color-<?php echo $product_name; ?>"></i>
                                                        <span><span id="amount_<?php echo $station_id; ?>"></span><script>setInterval(function () {
                                                                    fetch_price('<?php echo $product_name; ?>', '<?php echo $station_id; ?>', 'amount_<?php echo $station_id; ?>');
                                                                }, 1000);</script></span></div>
                                                    <div class="single-element-style"><i class="icon-calendar"></i>
                                                        <span><?php echo $date_updated; ?></span></div>

                                                    <hr class="hr-<?php echo $product_name; ?>"/>
                                                    <div class="single-element-style"><i
                                                            class="icon-map-marker"></i> <?php echo $station_address; ?>
                                                    </div>
                                                    <div class="single-element-style"><i
                                                            class="icon-phone"></i> <?php echo $station_phone; ?></div>
                                                    <div class="single-element-style"><i
                                                            class="icon-envelope"></i> <?php echo $station_email; ?>
                                                    </div>
                                                    <div class="well single-element-style"><i
                                                            class="icon-globe2"></i> <?php echo $station_website; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        <br/>

                                        <br/>
                                        <?php
                                    }
                                }
                            } ?>
                        </div>

                    </div>
                <?php } else {  // If a product name is not passed, we use fuel as the default product

                    ?>

                    <div id="product_glance">
                        <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                            <i style="color:#de9000;" class="service-for-icon icon-drop"></i>

                            <h3>FUEL</h3>

                            <p id="gas_station_count_fuel"></p>

                            <script>
                                // QUERY HOW MANY STATIONS HAVE FUEL
                                setInterval(function () {
                                    count_product_avail2('fuel', 'gas_station_count_fuel');
                                }, 1000);
                            </script>

                            <a href="./?product-type=fuel" class="btn btn-primary btn-lg">View</a>
                        </div>
                        <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                            <i style="color:#5a5ab9;" class="service-for-icon icon-drop"></i>

                            <h3>KEROSENE</h3>

                            <p id="gas_station_count_kerosene"></p>
                            <script>
                                // QUERY HOW MANY STATIONS HAVE FUEL
                                setInterval(function () {
                                    count_product_avail2('kerosene', 'gas_station_count_kerosene');
                                }, 1000);
                            </script>
                            <a href="./?product-type=kerosene" class="btn btn-primary btn-lg">View</a>
                        </div>
                        <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                            <i style="color:#9b399b;" class="service-for-icon icon-drop"></i>

                            <h3>DIESEL</h3>

                            <p id="gas_station_count_diesel"></p>
                            <script>
                                // QUERY HOW MANY STATIONS HAVE FUEL
                                setInterval(function () {
                                    count_product_avail2('diesel', 'gas_station_count_diesel');
                                }, 1000);
                            </script>
                            <a href="./?product-type=diesel" class="btn btn-primary btn-lg">View</a>
                        </div>
                        <div class="col-md-3 service-holder box-shadow-light radius_box services_box">
                            <i style="color:#dddddd;" class="service-for-icon icon-drop"></i>

                            <h3>COOKING GAS</h3>

                            <p id="gas_station_count_gas"></p>
                            <script>
                                // QUERY HOW MANY STATIONS HAVE FUEL
                                setInterval(function () {
                                    count_product_avail2('gas', 'gas_station_count_gas');
                                }, 1000);
                            </script>
                            <a href="./?product-type=gas" class="btn btn-primary btn-lg">View</a>
                        </div>
                    </div>


                    <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>
<!-- fh5co-blog-section -->
<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <ul style="list-style:none;">
                        <h3 class="section-title white-fg">Useful links</h3>
                        <li class="footer_useful_links"><a href="../"> Home</a></li>
                        <li class="footer_useful_links"><a href="./"> Products</a></li>
                        <li class="footer_useful_links"><a href="../stations/"> Gas Stations</a></li>
                        <li class="footer_useful_links"><a href="../contact/"> Contact</a></li>
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
                <div class="col-md-4 animate-box">
                    <h3 class="section-title  white-fg">Drop us a line</h3>

                    <p id="success_error" class="alert hidden" style="text-align:center;"></p>

                    <form action="javascript:void(0);" onsubmit="submitContactUs()" id="contactForm" method="post">
                        <div class="form-group">
                            <p class="grey_text_color sr-only"> Name: </p>
                            <input type="text" class="form-control" id="contact_name" placeholder="Your name..."
                                   required/>
                        </div>
                        <div class="form-group">
                            <p class="grey_text_color sr-only"> Email: </p>
                            <input type="email" class="form-control" name="email" id="contact_email"
                                   placeholder="Your Email..." required/>
                        </div>
                        <div class="form-group">
                            <p class="grey_text_color sr-only"> Message: </p>
                            <textarea class="form-control" id="contact_message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message..."
                                      required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="contact_us_submit" class="btn btn-flat form-control">SUBMIT
                            </button>
                        </div>

                    </form>
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
<script src="../core_files/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../core_files/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../core_files/s/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../core_files/js/jquery.waypoints.min.js"></script>
<script src="../core_files/js/sticky.js"></script>

<!-- Stellar -->
<script src="../core_files/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="../core_files/js/hoverIntent.js"></script>
<script src="../core_files/js/superfish.js"></script>

<!-- Main JS -->
<script src="../core_files/js/main.js"></script>

</body>
</html>

