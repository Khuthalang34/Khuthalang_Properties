<?php

//echo "ree".$chk;
//ob_start();
ob_clean();
//we require this file for db connection
require_once('includes/config.php');


//if form has been submitted process it
                    if(isset($_POST['submit'])){


                        $_POST = array_map( 'stripslashes', $_POST );

                        //collect form data
                        extract($_POST);

                        $uploadLocation =  "attachments/";

                        $property_title = $_POST['property-title'];
                        $property_description = $_POST['property-description'];
                        $select_type = $_POST['select-type'];
                        $select_status = $_POST['select-status'];
                        $suburb = $_POST['suburb'];
                        $Bedrooms = $_POST['Bedrooms'];
                        $Bathrooms = $_POST['Bathrooms'];
                        $Property_ID = $_POST['Property-ID'];
                        $Garages = $_POST['Garages'];
                        $Sale_Rent_Price = $_POST['Sale-Rent-Price'];
                        $Deposit_Price = $_POST['Deposit-Price'];
						$features = $_POST['features'];

                       $uploadLocation =  "property_images/";

                       $Image_1 = null;
                        if(isset($_FILES['Image_1'])){
                          $image_name = $_FILES['Image_1']['name'];
                          $image_size = $_FILES['Image_1']['size'];
                          $image_tmp = $_FILES['Image_1']['tmp_name'];
                          $image_1 = $uploadLocation.$image_name;
                          $move = move_uploaded_file($image_tmp,$image_1 );
                        }

                        $Image_2 = null;
                        if(isset($_FILES['Image_2'])){
                          $image_name = $_FILES['Image_2']['name'];
                          $image_size = $_FILES['Image_2']['size'];
                          $image_tmp = $_FILES['Image_2']['tmp_name'];
                          $image_2 = $uploadLocation.$image_name;
                          $move = move_uploaded_file($image_tmp,$image_2 );
                        }

                        $Image_3 = null;
                        if(isset($_FILES['Image_3'])){
                          $image_name = $_FILES['Image_3']['name'];
                          $image_size = $_FILES['Image_3']['size'];
                          $image_tmp = $_FILES['Image_3']['tmp_name'];
                          $Image_3 = $uploadLocation.$image_name;
                          $move = move_uploaded_file($image_tmp,$Image_3 );
                        }

                        $Image_4 = null;
                        if(isset($_FILES['Image_4'])){
                          $image_name = $_FILES['Image_4']['name'];
                          $image_size = $_FILES['Image_4']['size'];
                          $image_tmp = $_FILES['Image_4']['tmp_name'];
                          $Image_4 = $uploadLocation.$image_name;
                          $move = move_uploaded_file($image_tmp,$Image_4 );
                        }

                        $Image_5 = null;
                        if(isset($_FILES['Image_5'])){
                          $image_name = $_FILES['Image_5']['name'];
                          $image_size = $_FILES['Image_5']['size'];
                          $image_tmp = $_FILES['Image_5']['tmp_name'];
                          $Image_5 = $uploadLocation.$image_name;
                          $move = move_uploaded_file($image_tmp,$Image_5 );
                        }

                        $address = $_POST['address'];
                        $select_country = $_POST['select-country'];
                        $city = $_POST['city'];
                        $Province = $_POST['Province'];
                        $Zip_Postal_code = $_POST['Zip-Postal-code'];

                            try {

                                //insert into database
                                $stmt = $db->prepare('INSERT INTO properties (Property_Title,Property_Description,Type,Status,Suburb,Bedrooms,Bathrooms,Property_ID,Garages,Sale_or_Rent_Price,Deposit_Price,Property_Features,Property_Gallery_1,Property_Gallery_2,Property_Gallery_3,Property_Gallery_4,Property_Gallery_5,Address,Country,City,Province,Zip_Postal_Code) VALUES (:Property_Title,:Property_Description,:Type,:Status,:Suburb,:Bedrooms,:Bathrooms,:Property_ID,:Garages,:Sale_or_Rent_Price,:Deposit_Price,:Property_Features,:Property_Gallery_1,:Property_Gallery_2,:Property_Gallery_3,:Property_Gallery_4,:Property_Gallery_5,:Address,:Country,:City,:Province,:Zip_Postal_Code)') ;


                                $stmt->execute(array(

                                    ':Property_Title' => $property_title,
                                    ':Property_Description' => $property_description,
                                    ':Type' =>  $select_type ,
                                    ':Status' => $select_status ,
                                    ':Suburb' => $suburb ,
                                    ':Bedrooms' => $Bedrooms ,
                                    ':Bathrooms' => $Bathrooms ,
                                    ':Property_ID' => $Property_ID ,
                                    ':Garages' => $Garages ,
                                    ':Sale_or_Rent_Price' => $Sale_Rent_Price ,
                                    ':Deposit_Price' => $Deposit_Price ,
                                    ':Property_Features' => $features ,
                                    ':Property_Gallery_1' => 'property_images/'.$_FILES['Image_1']['name'],
                                    ':Property_Gallery_2' =>  'property_images/'.$_FILES['Image_2']['name'],
                                    ':Property_Gallery_3' => 'property_images/'.$_FILES['Image_3']['name'],
                                    ':Property_Gallery_4' => 'property_images/'.$_FILES['Image_4']['name'] ,
                                    ':Property_Gallery_5' => 'property_images/'.$_FILES['Image_5']['name'],
                                    ':Address' => $address ,
                                    ':Country' => $select_country,
                                    ':City' => $city,
                                    ':Province' => $Province,
                                    ':Zip_Postal_Code' => $Zip_Postal_code

                                ));


                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
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
    <meta name="author" content="Khuthalang" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Property Added | Khuthalang Property">
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
    <title>Property Added | Khuthalang Property</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <!-- including our header -->
       <?php include 'includes/header.php';?>

        <!--
=============================================-->
        <section class="page-404 text-center bg-overlay bg-overlay-dark3">
            <div class="bg-section"><img src="assets/images/background/bg-1.jpg" alt="background"></div>
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <img src="assets/images/404/404-icon.png" alt="icon">
                            <h3>Property ID : <?php echo $_POST['Property-ID']; ?> has been successfully uploaded!</h3>
                            <p> <a href="index.php">Go back to home</a></p>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .cotainer end -->
            </div>
            <!-- .cotainer end -->
        </section>


    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>



</html>
