<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head_links.php' ?>
  <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css"> -->
  
  <style>
      
      .about_two_text_sec h2 {
        display: flex;
        flex-direction: column;
        text-transform:none;
        font-size:50px;
        color: var(--skyblue);
    }
    .about_two_text_sec h2 span{
        font-size:unset;
        font-style:unset;
        color:var(--blue);
    }
    .about_inn_img img{
        width:100%;
        margin-top:230px;
    }
    @media(max-width:991px){
        .about_inn_img img{
            margin-top:-40px;
        }
    }
      
  </style>
  
</head>

<body>

  <?php include 'header.php' ?>

  <section class="about_inn_main">
      <div class="inner_bnr_sec">
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/inner_banner1.png">
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb__content">
            <h2>About Us</h2>
            <div class="breadcrumb__menu">
              <nav>
                <ul>
                  <li><a href="<?php echo $base_url; ?>">Home</a></li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <li><span>About Us</span></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="about_two">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about_two_text_sec">
            <h5>About</h5>
            <h2><span>Care</span> Diabetes <br> Centre</h2>
            <hr>
            <p>For over two decades, our Diabetes Care Center has been the leading
              provider of comprehensive diabetic care in the community. We offer a full
              range of services under one roof, from initial screenings and diagnosis to
              specialized treatments and ongoing management.</p>
            <p>Our team includes Diabetology practitioners, certified diabetes educators,
              registered dietitians, and experienced nurses working together to develop
              personalized care plans for each patient's unique needs. We utilize the latest
              technology and equipment to accurately diagnose diabetes and effectively manage
              diabetes-related complications. Patient education is a top priority. We provide
              extensive resources, support programs, and one-on-one counseling to empower
              individuals with the knowledge and skills for successful self-care, lifestyle changes,
              and treatment plan adherence.</p>
            <p>Our goal is to help patients achieve optimal
              diabetes control and an improved quality of
              life.With our comprehensive, patient-centered approach and commitment to
              delivering exceptional care, the Diabetes
              Care Center has been the trusted leader in
              diabetic care for our community for the past
              25 years. We continue to innovate and
              enhance our services to best serve our
              patients.</p>
          </div>
        </div>
        <div class="col-lg-6">
            <div class="about_inn_img">
                <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/gallery/about_group.png">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="Our_sec">
            <div>
              <i class="fa-solid fa-eye fa-fw"></i>
            </div>
            <div>
              <h3>Our Vision</h3>
              <p>Our vision is to redefine excellence in diabetic care delivery by becoming the
                premier destination for compassionate, innovative, and patient-centric
                solutions. We strive to cultivate an empowering atmosphere that seamlessly
                blends medical expertise, advanced technology, and comprehensive
                support.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="Our_sec">
            <div>
              <i class="fa-solid fa-paper-plane"></i>
            </div>
            <div>
              <h3>Our Mission</h3>
              <p>Our mission is to provide comprehensive, individualized diabetes care
                through a collaborative multidisciplinary team approach. We are committed
                to delivering advanced medical treatments integrated with extensive
                education to empower patients in self-management. By combining cutting-edge therapies, supportive resources, and a passion for improving lives, we
                strive to elevate standards in diabetes treatment, prevention, and the pursuit
                of a cure</p>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4">
          <div class="Our_sec">
            <div>
              <i class="fa-solid fa-handshake"></i>
            </div>
            <div>
              <h3>Core Values</h3>
              <p>We’re driven by the values we follow. Checkout our 5 core values – Idea Team adhere to</p>
            </div>
          </div>
        </div> -->
      </div>

    </div>
  </section>


  <section class="expert_main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="expert_sec">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="expert_text">
                  <h3>25 Years of <br> Experience</h3>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="expert_text">
                  <h3>20000+ Happy <br> Patients</h3>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 xol-sm-12">
                <div class="expert_text">
                  <h3>5+ Experienced <br> Doctors</h3>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="expert_second_row">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="expert_sec">
            <div class="row">
              <div class="col-lg-4">
                <div class="expert_text">
                  <h3>Courier of<br> Medicine</h3>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="expert_text">
                  <h3>Online <br> Consulting</h3>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="expert_text">
                  <h3>Laboratory <br> Home Services</h3>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <section class="team_main">
  <div class="container">
    <div class="team_head">
      <h2><span>Our</span> Team</h2>
    </div>
    <div class="team_sliders">
      <div class="team_card_sec">
        <span class="count-text">1</span>
        <div class="team_img">
          <img src="<?php echo $base_url; ?>assets/images/home/care_doctor.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Saini Venkateswarlu</h3>
          <p>M.D</p>
          <!-- <a href="<?php echo $base_url; ?>">View Profile</a> -->
        </div>
      </div>
      <div class="team_card_sec">
        <p class="count-text">2</p>
        <div class="team_img">
          <img src="<?php echo $base_url; ?>assets/images/home/care_doctor2.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Ganta Vandana</h3>
          <p>M.D</p>
          <!-- <a href="<?php echo $base_url; ?>">View Profile</a> -->
        </div>
      </div>
        <div class="team_card_sec">
        <p class="count-text">3</p>
        <div class="team_img">
          <img src="assets/images/home/Dr_Madhavi_Cardiologist.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Madhavi</h3>
          <p>Cardiologist</p>
          <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
        </div>
      </div>
      <div class="team_card_sec">
        <p class="count-text">4</p>
        <div class="team_img">
          <img src="assets/images/home/Dr_Vidyasagar_General_Surgeon.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Vidhyasagar</h3>
          <p>General Surgeon</p>
          <a href="<?php echo $base_url; ?>">View Profile</a>
        </div>
      </div>
      <div class="team_card_sec">
        <p class="count-text">5</p>
        <div class="team_img">
          <img src="assets/images/home/Dr_Mrunalini_Dental.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Mrunalini</h3>
          <p>Dental</p>
          <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
        </div>
      </div>
        <div class="team_card_sec">
        <p class="count-text">6</p>
        <div class="team_img">
          <img src="assets/images/home/Dr_Ajay_Physio.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Ajay</h3>
          <p>Physiotherapist</p>
          <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
        </div>
      </div>
      <div class="team_card_sec">
        <p class="count-text">7</p>
        <div class="team_img">
          <img src="assets/images/home/care_doctor3.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr Bharadwaj Batchu</h3>
          <p>Nephrologist</p>
          <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
        </div>
      </div>
       <div class="team_card_sec">
        <p class="count-text">7</p>
        <div class="team_img">
          <img src="assets/images/home/Dr_Navaneeth_General_Physician.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
        </div>
        <div class="team_text">
          <h3>Dr. Navaneeth</h3>
          <p>General Physician</p>
          <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
        </div>
      </div>
    </div>
  </div>
</section>


  <?php include 'footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.team_sliders').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
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


</body>



</html>