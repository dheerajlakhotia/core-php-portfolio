<?php require_once "includes/navbar.php"; ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?= $data["title"] ?></h3>
            <p class="fst-italic">
              <?= $data["slogan"] ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong><?php echo date(
                      "d M Y",
                      strtotime($data["birthday"])
                  ); ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> <?= $data[
                      "website"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong>  <?= $data[
                      "phone"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?= $data[
                      "city"
                  ] ?></li>
                   <li><i class="bi bi-rounded-right"></i> <strong>Skills:</strong> <?= $data[
                       "skills"
                   ] ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong>  <?= $data[
                      "age"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong>  <?= $data[
                      "degree"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Certification:</strong>  <?= $data[
                      "certification"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong>  <?= $data[
                      "email"
                  ] ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> 
                <?php if ($data["freelance"] == 1) {
                    echo "Avaliable";
                } else {
                    echo "Not Avaiable";
                } ?>
                
                </li>
                </ul>
              </div>
            </div>
            <p>
             <?= $data["description"] ?>
            </p>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End About Section -->


<?php
$skills = "SELECT * FROM `skills`";
$skills_result = mysqli_query($conn, $skills);
?>

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Skills</h2>
    </div>

    <div class="row skills-content">
      <div class="col-lg-6">
        <?php 
        $counter = 0;
        if ($skills_result->num_rows > 0) {
          while ($rows = $skills_result->fetch_assoc()) {
            if ($counter < $skills_result->num_rows / 2) {
        ?>
        <div class="progress">
          <span class="skill"><?= $rows["sname"] ?> <i class="val"><?= $rows["post"] ?>%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $rows["post"] ?>" aria-valuemin="<?= $rows["pre"] ?>" aria-valuemax="<?= $rows["post"] ?>"></div>
          </div>
        </div>
        <?php
            }
            $counter++;
          }
        }
        ?>
      </div>
      <div class="col-lg-6">
        <?php 
        $counter = 0;
        if ($skills_result->num_rows > 0) {
          mysqli_data_seek($skills_result, $skills_result->num_rows / 2); // Set the result set pointer to the middle
          while ($rows = $skills_result->fetch_assoc()) {
            if ($counter < $skills_result->num_rows / 2) {
        ?>
        <div class="progress">
          <span class="skill"><?= $rows["sname"] ?> <i class="val"><?= $rows["post"] ?>%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $rows["post"] ?>" aria-valuemin="<?= $rows["pre"] ?>" aria-valuemax="<?= $rows["post"] ?>"></div>
          </div>
        </div>
        <?php
            }
            $counter++;
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- End Skills Section -->







    <?php
    $counter = "SELECT * FROM `counter`";

    $counter_result = mysqli_query($conn, $counter);
    ?>
        <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
        </div>

        <div class="row counters">

    <?php if ($counter_result->num_rows > 0) {
        while ($rows = $counter_result->fetch_assoc()) { ?>
    <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="<?= $rows[
                "pre"
            ] ?>" data-purecounter-end="<?= $rows[
    "post"
] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?= $rows["title"] ?></p>
          </div>
        <?php }
    } ?>
        </div>

      </div>
    </section>
    <!-- End Facts Section -->

  </main><!-- End #main -->

  <?php require_once "includes/footer.php"; ?>

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