<?php require_once"includes/config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Kelly Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php

if(isset($_GET['id'])){
  $id= $_GET['id'];
  $sql= "SELECT * FROM `portfolio_skills` WHERE `portfolio_skills`.`id`= '$id'";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);

   $catagroy = $data['catagroy'];
   $catagroy_sql = "SELECT * FROM `catagroy` WHERE `catagroy`.`id`= '$catagroy'";
   $catagroy_result = mysqli_query($conn, $catagroy_sql);
   $catagroy_data = mysqli_fetch_assoc($catagroy_result);
}


?>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?=$data['image1']?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?=$data['image2']?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?=$data['image3']?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?=$data['title']?></h3>
              <ul>
                <li><strong>Category</strong>:<?=$catagroy_data['name']?></li>
                <li><strong>Client</strong>: <?=$data['client']?></li>
                <li><strong>Project date</strong>:<?php echo date('d M Y', strtotime($data['project_date']))?></li>
                <li><strong>Project URL</strong>: <a target='_blank' href="<?=$data['url']?>"><?=$data['url']?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is <?=$data['title']?> detail</h2>
              <p>
               <?=$data['description']?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>