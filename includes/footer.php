<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?=$data['name'] ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <?php
          $details= "select * from `details` where `details`.`id`= 1";
          $details_result = mysqli_query($conn, $details);
          $details_data= mysqli_fetch_assoc($details_result);
        ?>
        Designed by <a href="<?=$details_data['url']?>" target= '_blank'><?=$details_data['company'] ?></a>
      </div>
    </div>
  </footer>
  
  <!-- End  Footer -->


  