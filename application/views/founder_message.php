<!DOCTYPE html>
<html lang="en">
<?php $base_url = "https://carediabetescentre.com/"; ?>
<head>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
    <?php include 'head_links.php' ?>
    
    <style>
        .crm_text {
            background-color: #ffffff;
            width: fit-content;
            text-align: end;
        }
        .crm_text p {
            font-size: 24px;
            color: #00b2f1;
        }
        .crm_text span {
            font-size: 32px;
            color: #2f3194;
        }
        .crm_text {
          background-color: #e5e5e5;
          width:100%;
        }
        .founder_img img {
          width: 100%;
        }
        .founder_img::after {
            top: -12px;
            right: -10px;
        }
        @media(max-width:1199px){
            .crm_text span{
                font-size:28px;
            }
        }
        @media(max-width:991px){
            .founder_img{
                width:100%;
            }
        }
        @media(max-width:425px){
            .crm_text p{
                font-size:21px;
            }
        }
        @media(max-width:385px){
            .crm_text span {
                font-size: 25px;
            }
        }
        @media(max-width: 354px) {
            .crm_text span {
                font-size: 21px;
            }
        }
    </style>
    
</head>

<body>

    <?php include 'header.php' ?>

    <section class="about_inn_main">
        <div class="inner_bnr_sec">
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/inner_banner10.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2>Founder Message</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span>Founder Message</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="founder_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="founder_message">
                        <h3>Founder Message</h3>
                        <hr>
                        <p>Twenty-five years ago, our journey began with a vision to revolutionize diabetic care.
                            Today, as we reflect on our achievements, we're reminded of the countless lives
                            touched and transformed within these walls. But our mission is far from over. With
                            steadfast dedication and unwavering commitment, we press forward, guided by the
                            belief that every individual deserves the opportunity to live their healthiest, happiest
                            life. Here's to another twenty-five years of innovation, compassion, and hope.
                            Together, we'll continue to make a difference—one patient, one breakthrough, one
                            day at a time.</p>
                        <p>As the founder of this center, my vision
                            was to create a haven for those affected
                            by diabetes—a place where they could
                            find not just medical care, but
                            understanding, support, and
                            empowerment. Twenty-five years on, I am
                            proud to see our center standing as a
                            beacon of hope and healing in our
                            community. To all those who have walked
                            through our doors seeking solace and
                            treatment, know that you are not alone in
                            this journey. Together, we will continue to
                            strive for excellence in diabetic care,
                            enriching lives and fostering a brighter,
                            healthier future for all."
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 founder_img_sec">
                    <div class="founder_img">
                        <img src="<?php echo $base_url; ?>assets/images/home/venkateshwarlu.jpg" alt="doctor" class="img-fluid" loading="lazy" decoding="async">
                    </div>
                    <div class="crm_text crm_text1">
                        <p><span>Dr. Saini Venkateswarlu,</span> </p>
                        <p>M.D</p>

                        <!--<h5>Diabetologist</h5>-->
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include 'footer.php' ?>
</body>



</html>