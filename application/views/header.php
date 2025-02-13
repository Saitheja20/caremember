<!-- navbar section -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Diabeties Center | Hanamkonda Chowrastha, Hanuman
Temple Road, Hanamkonda - 506001</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/header.css">
    <style>
        .number{
            font-size: 21px;
        }
        .care_logo{
            width:190px;
        }
        
        .sticky-social {
            position: fixed;
            top: 300px;
            left: 0;
            padding: 0px;
            margin: 0px;
            z-index: 9999;
        }
        .social{
          list-style:none;
        }
        .social li{
          padding:10px 10px;
          font-size:25px;
          transition:all 0.8s ease-in-out;
        }
        .social li:hover{
            margin-right:-30px;
         box-shadow:2px 5px 10px grey;
        }
        .social li:hover .fa-brands{
            margin-left:20px;
          
        }
        .fa-brands{
          color:#fff;
          transition:all 0.8s ease-in-out;
        }
        .fb{
          background-color:#3C5A98;
        }
        .twitter{
            background-color:#1EA1F2;
        }
        .insta{
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }
        .pin{
            background-color:#0099CC;
        }
        .vim{
            background-color:#ff0000;
        }
        @media(max-width:991px){
            .offcanvas-header .btn-close {
                margin-left: 0;
                margin-top: 0;
            }
            .offcanvas-header{
                justify-content:space-between;
            }
            .navbar .navbar-nav {
                align-items: center;
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                margin: 2px 0;
                padding: 5px 0;
                font-size:18px;
            }
            .nav-link .line_hvr::before, .nav-link .line_hvr::after{
                background:var(--white);
            }
            .nav-link.admissions.fw-bold ul li:nth-child(1) {
                font-size: 18px;
            }
            .number {
                font-size: 20px !important;
                margin-top: 5px;
            }
        }
        @media(max-width:425px){
            .about_section p {
                font-size: 11px;
                right: -42px;
            }
        }
    </style>
</head>

<body>




    <nav class="navbar navbar-expand-lg">



        <div class="container">



            <a class="navbar-brand" href="index">
                <figure class="figure">
                    <img src="assets/images/brand/care_logo_new.png" class="img-fluid care_logo" alt="care diabeties Logo" loading="lazy" decoding="async">
                </figure>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label"><a class="navbar-brand" href="index">
                            <figure class="figure">
                                <img src="assets/images/brand/care_logo_new_white.png" alt="care diabeties Logo" loading="lazy" decoding="async">
                            </figure>
                        </a></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="togg_main_sec">
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index"><span class="line_hvr"><span></span></span>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service"><span class="line_hvr"><span></span></span>Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="doctor"><span class="line_hvr"><span></span></span>Doctors</a>
                            </li>
							 <li class="nav-item">
                                <a class="nav-link" href="doctors_info"><span class="line_hvr"><span></span></span>Doctors Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Patient_education"><span class="line_hvr"><span></span></span>Patient Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about"><span class="line_hvr"><span></span></span>About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact"><span class="line_hvr"><span></span></span>Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="founder_message"><span class="line_hvr"><span></span></span>Founder Message</a>
                            </li>
                        </ul>

                        <div class=" remove_991">
                            <a class="nav-link admissions fw-bold" href="https://forms.gle/sKpsJcD2ZRyUJ83E6" target="_blank">
                                <img src="assets/images/brand/phone.webp" alt="Shine Group Logo" loading="lazy" decoding="async">
                                <ul>
                                    <li>Book Appointment</li>
                                    <li class="number">0870 - 2544547 / 48</li>
                                    <li class="number">8712608502</li>
                                </ul>
                            </a>
                        </div>
                    </div>

                    <!-- <div class="togg_add_sec">
                    <div class="admission_tog">
                        <h3>ADMISSIONS <br> OPEN 2023 - 24</h3>
                        <a href="<?php echo $base_url; ?>https://shinejuniorcolleges.com" target="_blanck">Shine Junior College </a>
                    </div>

                    <div class="admission_tog parent_login">
                        <h5>Login:</h5>
                        <a href="<?php echo $base_url; ?>">Parent Login</a>
                    </div>

                    <div class="tog_address">
                        <h4>Shine Group of Institution</h4>
                        <div class="tog_address_icon_sec">
                            <figure class="add_tog_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/map.webp" alt="Shine Group Logo" loading="lazy" decoding="async">
                            </figure>
                            <p>Beside Swimming Pool, Balasamudram, Hanumakonda, Telangana 506001</p>
                        </div>

                        <div class="tog_address_icon_sec">
                            <figure class="add_tog_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/mail.webp" alt="Shine Group Logo" loading="lazy" decoding="async">
                            </figure>
                            <div class="tog_links">
                                <a href="tel: +91 8886663384">+91 8886663384</a>
                                <a href="mailto: shinegroupofschools@gmail.com">shinegroupofschools@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                    <!-- 
                <div class="tog_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div> -->
                </div>
            </div>
        </div>
    </nav>



<div class="sticky-social">
  <ul class="social">
      <li class="whatsapp"><a href="https://api.whatsapp.com/send?phone=+91 8712608502&text=Hii" tooltip="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
    <li class="fb"><a href="https://www.facebook.com/share/1EoceiafoL/" tooltip="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
        <!--<li class="twitter"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>-->
      <li class="insta"><a href="https://www.instagram.com/carediabetescenter/"><i class="fa-brands fa-instagram"></i></a></li>
      <!--<li class="pin"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>-->
      <!--<li class="vim"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>-->
    </ul>
  </div>


</body>

</html>
