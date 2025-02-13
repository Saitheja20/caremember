  <section class="footer_section">
      <div class="footer">
          <div class="container">
              <div class="footer_sec">
                  <div class="footer_logo">
                      <img src="<?php echo $base_url; ?>assets/images/brand/care_logo_new_white.png" alt="doctor image" class="img_fluid">

                  </div>
                  <div class="brocher">
                      <h3> For More Info Download</h3>
                      <div class="brouch">
                          <a href="<?php echo $base_url; ?>assets/images/home/broucher.pdf" target="_blank">
                              <img src="<?php echo $base_url; ?>assets/images/home/icon_pdf.webp" alt="doctor image" class="img_fluid">

                              <h4>Brochure</h4>
                          </a>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <ul>
                          <li class="adress">

                              <img src="<?php echo $base_url; ?>assets/images/home/root_icon.webp" alt="doctor image" class="img_fluid">

                              <p>Hanamkonda Chowrastha, Hanuman<br> Temple Road, Hanamkonda - 506001

                          </li>
                          <li class="adress">

                              <img src="<?php echo $base_url; ?>assets/images/home/mail.webp" alt="doctor image" class="img_fluid mail">

                              <div class="mail_info">
                                  <h4><strong>0870 - 2544547</strong></h4>
                                  <h4><strong>8712608502</strong></h4>

                                  <p>
                                      <a class="mail_info" href="mailto:carediabetescentre.com">carediabetescentre.com</a>
                                  </p>

                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 timmings">
                      <h4><strong>Timings</strong></h4>
                      <ul class="time">
                          <li>Monday to Saturday<br>
                              <strong>7:00 am to 5:00pm</strong>
                          </li>
                          <li>Sunday<br>
                              <strong>7:00 am to 12:00pm</strong>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-4 fallow_us">
                      <h4><strong>Follow Us</strong></h4>

                      <ul>
                          <li><a href="https://www.facebook.com/share/1EoceiafoL/"><i class="fa-brands fa-facebook-f"></i></a></li>
                          <li><i class="fa-brands fa-twitter"></i></li>
                          <li><i class="fa-brands fa-linkedin-in"></i></li>
                          <li><i class="fa-brands fa-youtube"></i></li>
                          <li> <a href="https://www.instagram.com/carediabetescenter/"><i class="fa-brands fa-instagram"></a></i></li>

                      </ul>
                  </div>
              </div>

          </div>
      </div>

      <div class="copyright">
          <div class="container">
              <ul>
                  <li>Copyright 2024 Care Diabetes Center</li>
                  <li>Design and Development @ <a href="https://kakatiyasolutions.com/" target="_blank">Kakatiya Solutions</a></li>
              </ul>
          </div>
      </div>

      <div class="footer_orange_bg"></div>

      <button onclick="topFunction()" id="myBtn" title="Go to top" class="top-arrow"><i class="fa-solid fa-angle-up"></i></button>
  </section>

  </main>





  <!-- Bootstrap CDN Script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- AOS animations -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>


  <!-- Navbar & Top Button Script -->
  <script>
      const navbar = document.querySelector('.navbar');

      //Get the button
      var mybutton = document.getElementById("myBtn");

      window.onscroll = () => {
          if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20) {
              myBtn.style.display = "block";
          } else {
              myBtn.style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
  </script>
  <!-- Navbar & Top Button Script -->

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->



  <script>
      $(document).ready(function() {
          $('.team_sliders').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              // dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 600,
                      settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                      }
                  }
              ]
          });
      });
  </script>