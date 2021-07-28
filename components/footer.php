 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <img src="assets/img/Images/Asset/logo_main.png" alt="" class="img-fluid">
              <h3>UB Distance Education Portal</h3>
              <p>
                
                Kumintang Ibaba, Hilltop, Batangas City<br><br>
                <strong>Phone:</strong> +63.43.980.00.41<br>
                <strong>Phone:</strong> +63.43.723.14.46<br>
                <strong>Email:</strong> admin@ub.edu.ph<br>
              </p>
              <div class="social-links mt-3">
                <a target="_blank" href="https://twitter.com/ubatangas" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/ubatangas" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a target="_blank" href="https://vimeo.com/ubatangas" class="vimeo"><i class="bx bxl-vimeo"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://enrollment.ub.edu.ph/admission/form.php?q=new">Application</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://ubsd.ub.edu.ph/ubopbc/index.php">Payment Portal</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://enrollment.ub.edu.ph/admission/">Enrollment</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://sites.google.com/a/ub.edu.ph/library-department/">UB Library Portal</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="http://cprell.ub.edu.ph/">Research</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://ubian.ub.edu.ph/?from=%2Fhome_news&log_in_required=true">UBIAN LMS</a></li>
              <li><i class="bx bx-chevron-right"></i><a target="_blank" href="https://ebrahman.ub.edu.ph/loginpage.php">eBRAHMAN</a></li>
<!--               <li><i class="bx bx-chevron-right"></i><a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Course Category</h4>
            <ul>
              <?php
                include 'components/course_categ.php';
                foreach($category as $l){
                  echo '<li><i class="bx bx-chevron-right"></i> <a href="courses.php?filter='.$l['code'].'">'.$l['categ'].'</a></li>';
                }
              ?>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4> -->
            <img class="img-fluid" src="assets/img/clients/aja.jpeg"/>
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; <strong><span>2021 University of Batangas, All Rights Reserved</span></strong>. &mdash; Hilltop Road, Batangas City 4200 Philippines
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>