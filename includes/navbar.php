<?php include'includes/config.php';

$sql = "SELECT * FROM `user` WHERE `user`.`id` = 7";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $data['name']?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
    }

    .whatsapp-button a img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <h1 class="logo me-auto me-lg-0"><a href="index.php">DHEERAJ</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links">


                <?php 
        if($data['twitter']){
      ?>
                <a href="<?php  echo $data['twitter']?>" target="_blank" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <?php
        }
      ?>

                <?php 
        if($data['facebook']){
      ?>
                <a href="<?php  echo $data['facebook']?>" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <?php
        }
      ?>

                <?php 
        if($data['instagram']){
      ?>
                <a href="<?php  echo $data['instagram']?>" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <?php
        }
      ?>

                <?php 
        if($data['linkdein']){
      ?>
                <a href="<?php  echo $data['linkdein'] ?>" target="_blank" class="linkdein"><i
                        class="bi bi-linkedin"></i></a>
                <?php
        }
      ?>

                <?php 
        if($data['github']){
      ?>
                <a href="<?php  echo $data['github'] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
                <?php
        }
      ?>
            </div>

        </div>
        <div class="whatsapp-button">
            <a href="https://api.whatsapp.com/send?phone=9772526906" target="_blank">
                <img src="assets/img/whatsapp-icon.png" alt="WhatsApp" />
            </a>
        </div>


    </header><!-- End Header -->