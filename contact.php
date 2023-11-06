<?php require_once"includes/navbar.php" ?>

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?=$data['address']?><span>,<?=$data['place']?></span></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?=$data['email']?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?=$data['phone']?></p>
              </div>
 
            </div>

          </div>




          <div class="col-lg-8 mt-5 mt-lg-0">

           <form action="submit.php" method="post">
            <div class="form-group mb-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required  autocomplete="off">
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required  autocomplete="off">
            </div>
            <div class="form-group mb-2">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required  autocomplete="off">
            </div>
            <div class="form-group mb-2">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required  autocomplete="off"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>

           

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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