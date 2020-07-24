<?php

//ob_start();
ob_clean();
//we require this file for db connection
require_once('includes/config.php');

$Unique_ID = $_GET['property_id'];
//echo $Unique_ID; //test for fetching unique id from url

try {

    $stmt = $db->prepare('SELECT * FROM properties WHERE properties.ID = :Unique_ID');
    $stmt->execute(array(':Unique_ID' => $Unique_ID));
    $row = $stmt->fetch();

    $PropertyName = $row['Property_Title'];
    $PropertySuburb = $row['Suburb'];
    $PropertyAddress = $row['Address'];
    $PropertyProvince = $row['Province'];
    $PropertyRentORSale = $row['Status'];
    $PropertPrice = $row['Sale_or_Rent_Price'];
    $PropertyID = $row['Property_ID'];
    $PropertBedrooms = $row['Bedrooms'];
    $PropertyBathrooms = $row['Bathrooms'];
    $PropertyGarage = $row['Garages'];
    $PropertyDescription = $row['Property_Description'];
    $PropertyCity = $row['City'];
    $PropertyCountry = $row['Country'];
    $PropertyZipCode = $row['Zip_Postal_Code'];
    $PropertyGallery1 = $row['Property_Gallery_1'];
    $PropertyGallery2 = $row['Property_Gallery_2'];
    $PropertyGallery3 = $row['Property_Gallery_3'];
    $PropertyGallery4 = $row['Property_Gallery_4'];
    $PropertyGallery5 = $row['Property_Gallery_5'];
	$features = $row['Property_Features'];

    $_Session['Suburb'] = $PropertySuburb;


} catch(PDOException $e) {
  echo $e->getMessage();
  }

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
    <meta name="description" content="Real EProvince">
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
    <title>Property Listing | Khuthalang Properties</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <!-- including our header -->
       <?php include 'includes/header.php';?>

        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="<?php echo $PropertyGallery1; ?>" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1><?php  echo $PropertyName; ?></h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><?php  echo $PropertySuburb; ?></li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- property single gallery
============================================= -->
        <section id="property-single-gallery" class="property-single-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="property-single-gallery-info">
                            <div class="property--info clearfix">
                                <div class="pull-left">
                                    <h5 class="property--title"><?php echo $PropertyAddress; ?></h5>
                                    <p class="property--location"><i class="fa fa-map-marker"></i><?php echo $PropertyProvince; ?></p>
                                </div>
                                <div class="pull-right">
                                    <span class="property--status">For <?php echo $PropertyRentORSale; ?></span>
                                    <p class="property--price">R<?php echo number_format($PropertPrice,2); ?></p>
                                </div>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--meta clearfix">
                                <div class="pull-left">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li>
                                            Property ID:<span class="value"><?php echo $PropertyID;?></span>
                                        </li>
                                        <li style="opacity:0;">
                                            Add to favorites:<span class="value"> <i class="fa fa-heart-o"></i></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <div class="property--meta-share">
                                        <span class="share--title">share</span>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                    <!-- .property-meta-share end -->
                                </div>
                            </div>
                            <!-- .property-info end -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="property-single-carousel inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Gallery</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property-single-carousel-content">
                                        <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                            <img src="<?php echo $PropertyGallery1; ?>" alt="Property Image">
                                            <img src="<?php echo $PropertyGallery2; ?>" alt="Property Image">
                                            <img src="<?php echo $PropertyGallery3; ?>" alt="Property Image">
                                            <img src="<?php echo $PropertyGallery4; ?>" alt="Property Image">
                                            <img src="<?php echo $PropertyGallery5; ?>" alt="Property Image">
                                        </div>
                                        <!-- .carousel end -->
                                        <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                            <button class="owl-thumb-item">
								<img src="<?php echo $PropertyGallery1; ?>" style="width: 130px;" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
						   		<img src="<?php echo $PropertyGallery2; ?>" style="width: 130px;" alt="Property Image thumb">
						   </button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo $PropertyGallery3; ?>" style="width: 130px;" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo $PropertyGallery4; ?>" style="width: 130px;" alt="Property Image thumb">
							</button>
                                            <button class="owl-thumb-item">
								<img src="<?php echo $PropertyGallery5; ?>" style="width: 130px;" alt="Property Image thumb">
							</button>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->
                        <div class="property-single-desc inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Description</h2>
                                    </div>
                                </div>
                                <!-- feature-panel #1 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                     <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/2.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Beds:</h5>
                                            <p><?php echo $PropertBedrooms; ?> Bedroom(s)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #2 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/3.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Baths:</h5>
                                            <p><?php echo $PropertyBathrooms; ?> Bathroom(s)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #3 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p><?php echo $PropertyGarage; ?> Garage(s)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #4 -->
                                <div class="col-xs-6 col-sm-4 col-md-4" style="display: none;">
                                    <div class="feature-panel" >
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p>2 Garages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #5 -->
                                <div class="col-xs-6 col-sm-4 col-md-4" style="display: none;">
                                    <div class="feature-panel" >
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p>2 Garages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #6 -->
                                <div class="col-xs-6 col-sm-4 col-md-4" style="display: none;">
                                    <div class="feature-panel" >
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p>2 Garages</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property--details">
                                        <p><?php echo $PropertyDescription; ?></p>
                                    </div>
                                    <!-- .property-details end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->


                        <div class="property-single-features inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Features</h2>
                                    </div>
                                </div>
                                <!-- feature-item -->
                                <?php

								$str = $features;
								$arr=explode(',',$str);
								echo "<div class='col-xs-6 col-sm-4 col-md-4'>
													<div class='feature-item'><p>" . implode("</p></div></div><div class='col-xs-6 col-sm-4 col-md-4'>
													<div class='feature-item'><p>", array_filter($arr)) . "</p></div></div>";

								?>
                                <!-- feature-item end -->


                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-features end -->

                        <div class="property-single-location inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Location</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled mb-20">
                                        <li style="width: 100%;"><span>Address:</span><?php echo $PropertyAddress;  ?></li>
                                        <li><span>City:</span><?php echo $PropertyCity; ?></li>
                                        <li><span>Country:</span><?php echo $PropertyCountry; ?></li>
                                        <li><span>Province:</span><?php echo $PropertyProvince; ?></li>
                                        <li><span>Zip/Postal code:</span><?php echo $PropertyZipCode; ?></li>
                                    </ul>
                                </div>
                                <!-- .col-md-12 end -->

                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-location end -->


                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property agent
=============================-->
                        <div class="widget widget-property-agent">
                            <div class="widget--title">
                                <h5>About Agent</h5>
                            </div>
                            <div class="widget--content">
                                <a href="#">
                                    <div class="agent--img">
                                        <img src="assets/images/agents/grid/7.jpg" alt="agent" class="img-responsive">
                                    </div>
                                    <div class="agent--info">
                                        <h5 class="agent--title">Khuthalang Jwili</h5>
                                    </div>
                                </a>
                                <!-- .agent-profile-details end -->
                                <div class="agent--contact">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-phone"></i>+27 78 240 3105</li>
                                        <li><i class="fa fa-envelope-o"></i>info@khuthalang.com</li>
                                        <li><i class="fa fa-link"></i>khuthalangproperties.co.za</li>
                                    </ul>
                                </div>
                                <!-- .agent-contact end -->
                                <div class="agent--social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <!-- .agent-social-links -->
                            </div>
                        </div>
                        <!-- . widget property agent end -->

                        <!-- widget request
=============================-->
                        <div class="widget widget-request">
                            <div class="widget--title">
                                <h5>Request a Showing</h5>
                            </div>
                            <div class="widget--content">
                                <form class="mb-0">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name*</label>
                                        <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="(optional)">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="(optional)"></textarea>
                                    </div>
                                    <!-- .form-group end -->
                                    <input type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">
                                </form>
                            </div>
                        </div>
                        <!-- . widget request end -->

                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #property-single end -->


        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2  mb-70">
                            <h2 class="heading--title">Similar Properties</h2>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->

                            <?php
                                try {
                                  $q = 0;

                                    $stmts = $db->prepare('SELECT * FROM properties WHERE properties.ID != :Unique_ID AND Suburb = :Property_Suburb ORDER BY properties.ID ASC');
                                    $stmts->execute(array(
                                        ':Unique_ID' => $Unique_ID,
                                        ':Property_Suburb' => $_Session['Suburb']

                                ));
                                    //$rows = $stmts->fetch();

                                  while($rows = $stmts->fetch()){
                                      echo '';
                                  echo '<div class="property-item">
                                <div class="property--img">
                                    <a href="view-property.php?property_id='.$rows['ID'].'">
                                        <img src="'.$rows['Property_Gallery_1'].'" alt="property image" class="img-responsive">
                                        <span class="property--status">For '.$rows['Status'].'</span>
                                    </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="view-property.php?property_id='.$rows['ID'].'">Apartment in Long St.</a></h5>
                                        <p class="property--location">'.$rows['Address'].', '.$rows['City'].'</p>
                                        <p class="property--price">R'.number_format($rows['Sale_or_Rent_Price'],2).'</p>
                                    </div>
                                    <!-- .property-info end -->
                                    <div class="property--features">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="feature">Beds:</span><span class="feature-num">'.$rows['Bedrooms'].'</span></li>
                                            <li><span class="feature">Baths:</span><span class="feature-num">'.$rows['Bathrooms'].'</span></li>
                                            <li><span class="feature">Garage:</span><span class="feature-num">'.$rows['Garages'].'</span></li>
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>';


                                    $q++;
                                    if ($q == 6){
                                        break;
                                    }
                                    }
                                }catch(PDOException $e) {
                                         echo $e->getMessage();
                                    }
                                    ?>
                            <!-- .property item end -->

                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->

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
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
