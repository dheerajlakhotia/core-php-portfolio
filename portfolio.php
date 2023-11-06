<?php require_once"includes/navbar.php" ?>

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>



        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
         $portfolio = "SELECT * FROM `portfolio_skills`";
         $portfolio_result = mysqli_query($conn, $portfolio);

         if($portfolio_result-> num_rows > 0){
          while($portfolio_data = $portfolio_result -> fetch_assoc()){
           $catagroy = $portfolio_data['catagroy'];
           $catagroy_sql = "SELECT * FROM `catagroy` WHERE `catagroy`.`id`= '$catagroy'";
           $catagroy_result = mysqli_query($conn, $catagroy_sql);
           $catagroy_data = mysqli_fetch_assoc($catagroy_result);
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?=$catagroy_data['name']?>">
            <div class="portfolio-wrap">
              <img src="<?=$portfolio_data['image1']?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?=$portfolio_data['title']?></h4>
                <p><?php echo $catagroy_data['name']?></p>
                <div class="portfoio-links">
                  <a href="<?=$portfolio_data['image1']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?=$portfolio_data['title']?>"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?id=<?php echo $portfolio_data['id']?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
            <?php
          }
         }else{
        echo "No portfolio found.";
        }
        ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php require_once"includes/footer.php" ?>

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