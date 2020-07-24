<?php

require_once('includes/config.php');

$select_location = $_POST['select-location'];
$select_type = $_POST['select-type'];
$select_beds = $_POST['select-beds'];
$select_baths = $_POST['select-baths'];
$select_status = $_POST['select-status'];
$max_price = $_POST['max-price'];
$min_price = $_POST['min-price'];

//echo $select_location.''.$select_type.''. $select_beds.''.$select_baths.''.$select_status .''.$max_price .''.$min_price;

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="Khuthalang Properties" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Real Estate ">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
	<title>Search Results | Khuthalang Properties</title>
    <style>
	.hero-map #googleMap {

    height: 490px !important;
}

.surbarb-heading{
	    padding: 235px 0 175px;
    text-align: center;
	color: #fff;
}
	</style>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <!-- including our header -->
       <?php include 'includes/header.php';?>
        <!-- map
============================================ -->
        <section id="map" class="hero-map pt-0 pb-0" >
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="googleMap" style="background-image: url(&quot;assets/images/page-titles/header.jpg&quot;);background-color: rgba(52, 73, 94, 0.7);background-blend-mode: darken;">
						<h1 class="surbarb-heading">Search Results</h1>
						</div>

                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->

        </section>
        <!-- #map end -->

        <!-- properties-grid
============================================= -->
        <section id="properties-grid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property type
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property Type</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Apartments <span>(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Houses <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Land <span>(2)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property type end -->

                        <!-- widget property status
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property Status</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0"> 
                                    <li>
                                        <a href="#">For Sale <span>(15)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property status end -->


                        <!-- widget property city
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property By City</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Camps Bay <span>(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Newlands <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Khayelitsha <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Parklands <span>(7)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property city end -->


                        <!-- widget featured property
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Featured Properties</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                    
                                   
                                </div>
                                <!-- .carousel end -->
                            </div>
                        </div>
                        <!-- . widget featured property end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="properties-filter clearfix">
                                    <div class="select--box pull-left" style="opacity: 0;">
                                        <label>Sort by:</label>
                                        <i class="fa fa-angle-up"></i>
                                        <i class="fa fa-angle-down"></i>
                                        <select>
								<option selected="" value="Default">Default Sorting</option>
								<option value="Larger">Newest Items</option>
								<option value="Larger">oldest Items</option>
								<option value="Larger">Hot Items</option>
								<option value="Small">Highest Price</option>
								<option value="Medium">Lowest Price</option>
							</select>
                                    </div>
                                    <!-- .select-box -->
                                    <div class="view--type pull-right">
                                        <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                        <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="properties properties-grid">
                                <!-- .col-md-12 end -->


                                <!--fetch properties in sourthen suburbs -->

                                <?php
                                try {
                                  $q = 0;
								  if(isset($_POST['submit'])){
                                    $stmt = $db->query('SELECT * FROM `properties` WHERE `Bedrooms`= '.$select_beds.' AND `Bathrooms` = '.$select_baths.' AND `Type` = "'.$select_type.'" AND `Suburb` = "'.$select_location.'" AND `Status` = "'.$select_status.'" AND `Sale_or_Rent_Price` BETWEEN '.$min_price.' AND '.$max_price.'');

								  }
					 while($row = $stmt->fetch()){
                      echo '';
                  echo '<div class="col-xs-12 col-sm-6 col-md-6">
                                    <!-- .property-item(s) -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="view-property.php?property_id='.$row['ID'].'">
                                <img src="'.$row['Property_Gallery_1'].'" alt="property image" class="img-responsive">
                                </a>
                                            <span class="property--status">'.$row['Status'].'</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="view-property.php?property_id='.$row['ID'].'">'.$row['Property_Title'].'</a></h5>
                                                <p class="property--location">'.$row['Address'].'</p>
                                                <p class="property--price">R'.number_format($row['Sale_or_Rent_Price'],2).'</p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">'.$row['Bedrooms'].'</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">'.$row['Bathrooms'].'</span></li>
                                                    <li><span class="feature">Garage:</span><span class="feature-num">'.$row['Garages'].'</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>';


                    $q++;
                    }


                }catch(PDOException $e) {
                         echo $e->getMessage();
                    }
                    ?>


                                <!-- .property item end(s) -->



                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-grid  end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Get in touch with our professional team & agents for more info</h3>
                        <a href="#" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->
        <!-- Footer #1
============================================= -->
        <!--including our footer -->
        <?php include 'includes/footer.php';?>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>

    <script src="assets/js/plugins/jquery.gmap.min.js"></script>

</body>


</html>
