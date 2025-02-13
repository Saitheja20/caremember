<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php include 'head_links.php' ?>

    <style>
        .service_icon {
            margin-top: 0;
            margin-left: 0;
            background: linear-gradient(332deg, #1e196b, #00adef);
            padding: 10px 10px;
        }

        .service_icon h4 {
            color: #fff;
        }



        .mobile_sec {
            border-radius: 60px;
            border: solid 10px #000;
            height: auto !important;
        }

        .mobile_logo_sec {
            padding: 20px 30px;
            border-radius: 48px 48px 0 0;
            background: linear-gradient(332deg, #1e196b, #00adef);
        }

        .mobile_logo_sec img {
            width: 180px;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .mobile_text_sec {
            background-color: #ec6e1e;
            padding: 45px 20px;
            border-radius: 0 0 50px 50px;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .mobile_text_sec h3 {
            font-size: 50px;
            color: #fff;
            font-weight: bold;
            line-height: 50px;
        }

        .mobile_text_sec h3 span {
            margin-top: 25px;
            margin-bottom: 30px;
            display: block;
            color: #000;
            margin-bottom: 30px;
        }

        .about_section p {
            font-size: 13px;
            position: absolute;
            transform: rotate(-90deg);
            background-color: #fff;
            padding: 4px;
            right: -27px;
            bottom: 108px;
            margin: 0;
            line-height: unset;
        }

        .mobile_text_sec h5 {
            font-size: 22px;
            color: #fff;
            background-color: #1e196b;
            padding: 9px 15px;
            position: absolute;
            bottom: -8px;
            width: 75%;
            border-radius: 15px 15px 0 0;
            text-align: center;
        }

        .mobile_text_sec ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        .mobile_text_sec ul li {
            list-style-type: disc;
            margin-bottom: 0px;
            font-size: 16px;
            color: #fff;
        }

        /*.flipt_sec {*/
        /*    transform-style: preserve-3d;*/
        /*    position: relative;*/
        /*    transition: transform 1s;*/
        /*}*/
        /*.mobile_column:hover .flipt_sec{*/
        /*    transform: rotateY(180deg);*/
        /*    transition: transform 0.5s;*/
        /*}*/

        /*.front,*/
        /*.back {*/
        /*    backface-visibility: hidden;*/
        /*    position: absolute;*/
        /*}*/

        /*.back {*/
        /*    transform: rotateY(180deg);*/
        /*}*/

        /*.mobile_column {*/
        /*    position: relative;*/
        /*}*/
        .phone_img {
            text-align: left;
        }
    </style>

</head>

<body>

    <main>

        <?php include 'header.php' ?>
        <?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Connect to the database
$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_carehospital', 'Kakatiya1234$', 'u629694569_carediabetesce');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch images and titles from the database
$query = "SELECT id, description, image FROM carousel_banners";
$result = mysqli_query($con, $query);

// Check for errors or empty results
if (!$result || mysqli_num_rows($result) == 0) {
    $banners = [];
} else {
    $banners = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Close the database connection
mysqli_close($con);
?>

<!-- Banner Section -->
<section class="banner_img">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($banners)): ?>
                <?php foreach ($banners as $index => $banner): ?>
                    <?php 
                    $imageData = $banner['image'];
                    $title = $banner['description'];
                    $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
                    ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img src="<?php echo $imageSrc; ?>" alt="<?php echo htmlspecialchars($title); ?>" class="img-fluid">
                        <?php if (!empty($title)): ?>
                            <div class="caption" data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                                    <?php echo htmlspecialchars($title); ?>
                                </h2>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback banner items if no data is found -->
                <!-- <div class="carousel-item active">
                    <img src="<?php echo $base_url; ?>assets/images/banner/default_banner.webp" alt="banner" class="img-fluid">
                    <div class="caption" data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                            Welcome to Our Carousel
                        </h2>
                    </div>
                </div> -->
            <?php endif; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
        <!-- old banner section -->
            <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $base_url; ?>assets/images/banner/care_banner.webp" alt="banner"
                            class="img-fluid">
                        <div class="caption" data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                                data-aos="fade-up" data-aos-duration="1000">Control your Diabetes for life</h2>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <img src="<?php echo $base_url; ?>assets/images/banner/care_home_banner.jpg" alt="banner"
                            class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $base_url; ?>assets/images/banner/Banner_One.jpg" alt="banner"
                            class="img-fluid">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div> -->

            <!--<img src="<?php echo $base_url; ?>assets/images/banner/care_banner.webp" alt="doctor image" class="img-fluid">-->

            <!--<div class="caption" data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">-->

            <!--    <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">Control your Diabetes for life</h2>-->
            <!--</div>-->



        </section>

        <div class="about_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="howm_tile">
                            <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                                data-aos="fade-down" data-aos-duration="1000">Expert care <br> at your service</h2>
                        </div>
                        <!--<p class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">Expert Care provides comprehensive support for businesses involved in international trade. Our-->
                        <!--    services include guidance on export regulations, documentation, and logistics to ensure smooth-->
                        <!--    and compliant cross-border transactions. We offer tailored solutions to streamline the export-->
                        <!--    process, minimize risks, and enhance efficiency. Our dedicated team is committed to addressing-->
                        <!--    your specific needs, helping you navigate global markets with confidence and ease.-->
                        <!--</p>-->

                        <div class="row os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="export_logo">
                                    <img src="<?php echo $base_url; ?>assets/images/home/medicine_courier.png"
                                        alt="doctor image" class="img-fluid">

                                </div>
                                <div class="caretitle">
                                    <h3 class="lab_name">Courier of <br>Medicine</h3>
                                    <a href="https://forms.gle/RtNiKjnDSoJuc28C6" target="_blank"
                                        class="book_now">Register Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 online_con">
                                <div class="export_logo">
                                    <img src="<?php echo $base_url; ?>assets/images/home/online-consulting.png"
                                        alt="doctor image" class="img-fluid">
                                </div>
                                <div class="caretitle">
                                    <h3 class="lab_name">Online Consulting</h3>
                                    <a href="https://forms.gle/sKpsJcD2ZRyUJ83E6" target="_blank"
                                        class="book_now">Register Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="export_logo">
                                    <img src="<?php echo $base_url; ?>assets/images/home/home-lab.png"
                                        alt="doctor image" class="img-fluid">
                                </div>
                                <div class="caretitle">
                                    <h3 class="lab_name">Laboratory <br>Home Services</h3>
                                    <a href="https://forms.gle/sKpsJcD2ZRyUJ83E6" target="_blank" class="book_now">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mobile_column phone_img os-init aos-animate" data-aos-easing="linear"
                        data-aos="fade-left" data-aos-duration="1000">
                        <!--<a href="javascript:void(0)" target="_blank">-->
                        <!--    <img src="<?php echo $base_url; ?>assets/images/home/care_phone.webp" alt="doctor image" class="img-fluid book_now_img">-->
                        <!--</a>-->
                        <div class="mobile_sec">
                            <div class="mobile_logo_sec">
                                <img src="assets/images/brand/care_logo_new_white.png" class="img-fluid" loading="lazy"
                                    decoding="async" alt="logo">
                            </div>

                            <div class="mobile_images_slide">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/home/care_diabeties1.webp" class="img-fluid"
                                                alt="images" loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_kidney.webp" class="img-fluid"
                                                alt="images" loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_eye.webp" class="img-fluid" alt="images"
                                                loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_leg.webp" class="img-fluid" alt="images"
                                                loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_dental.webp" class="img-fluid"
                                                alt="images" loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_service1.webp" class="img-fluid"
                                                alt="images" loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/care_adult.webp" class="img-fluid" alt="images"
                                                loading="lazy" decoding="async">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/home/day_care.webp" class="img-fluid" alt="images"
                                                loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="flipt_sec">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="mobile_text_sec">
                                                <h3>Total Diabetes Health Profile <span>₹ 7000/-</span></h3>
                                                <p><span>*</span> T&C APPLY</p>
                                                <h5>Total Diabetes Care</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="mobile_text_sec">
                                                <h3>Master Diabetes Health Profile <span>₹ 10,000/-</span></h3>
                                                <p><span>*</span> T&C APPLY</p>
                                                <h5>Total Diabetes Care</h5>

                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="mobile_text_sec">
                                                <h3>Diabetes Health Profile <span>₹ 4000/-</span></h3>
                                                <p><span>*</span> T&C APPLY</p>
                                                <h5>Total Diabetes Care</h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
            </div>
        </div>


        <section class="our_export_sec">
            <div class="container">
                <div class="main_title">
                    <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-down"
                        data-aos-duration="1000">Our Experts</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6  col-md-6 col-sm-12 doct_gap1 os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-right" data-aos-duration="1000">
                        <div id="carouselExampleFade" class="carousel slide carousel-slide">
                            <div class="carousel-indicators doctor_indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="our_export">
                                                <img src="<?php echo $base_url; ?>assets/images/home/care_doctor.webp"
                                                    alt="doctor image" class="img-fluid">
                                                <div class="doct_name">
                                                    <h3>Dr. Saini Venkateswarlu</h3>
                                                    <p>M.D</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="our_export">
                                                <img src="<?php echo $base_url; ?>assets/images/home/care_doctor2.webp"
                                                    alt="doctor image" class="img-fluid">
                                                <div class="doct_name">
                                                    <h3>Dr. Ganta Vandana</h3>
                                                    <p>M.D</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="doct_name">
                                                <div class="our_export">
                                                    <img src="assets/images/home/Dr_Madhavi_Cardiologist.webp"
                                                        alt="doctor image" class="img-fluid">
                                                    <h3>Dr. Madhavi</h3>
                                                    <p>Cardiologist</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="our_export">
                                                <img src="assets/images/home/Dr_Vidyasagar_General_Surgeon.webp"
                                                    alt="doctor image" class="img-fluid">
                                                <div class="doct_name">
                                                    <h3>Dr. Vidhyasagar</h3>
                                                    <p>General Surgeon</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="doct_name">
                                                <div class="our_export">
                                                    <img src="assets/images/home/Dr_Mrunalini_Dental.webp"
                                                        alt="doctor image" class="img-fluid">
                                                    <h3>Dr. Mrunalini</h3>
                                                    <p>Dental</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="doct_name">
                                                <div class="our_export">
                                                    <img src="assets/images/home/Dr_Ajay_Physio.webp" alt="doctor image"
                                                        class="img-fluid">
                                                    <h3>Dr. Ajay</h3>
                                                    <p>Physiotherapist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="doct_name">
                                                <div class="our_export">
                                                    <img src="assets/images/home/care_doctor3.webp" alt="doctor image"
                                                        class="img-fluid">
                                                    <h3>Dr Bharadwaj Batchu</h3>
                                                    <p>Nephrologist</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="doct_name">
                                                <div class="our_export">
                                                    <img src="assets/images/home/Dr_Navaneeth_General_Physician.webp"
                                                        alt="doctor image" class="img-fluid">
                                                    <h3>Dr. Navaneeth</h3>
                                                    <p>General Physician</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Connect to the database
$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_carehospital', 'Kakatiya1234$', 'u629694569_carediabetesce');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch videos from the database
$query = "SELECT * FROM expert_videos";
$result = mysqli_query($con, $query);

// Initialize the array to hold the fetched data
$data = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // If the video path is not NULL, keep it as is
        if (!empty($row['video_data'])) {
            // No base64 encoding needed for file path
            $row['video_data'] = base64_encode($row['video_data']);
        } else {
            $row['video_data'] = null; // No video available
        }
        $data[] = $row;
    }
}

// Close the database connection
mysqli_close($con);
?>

<div class="col-lg-6 col-md-12 col-sm-12 doct_gap2 os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-left" data-aos-duration="1000">
    <div id="carouselExampleFade2" class="carousel slide carousel-slide">
        <div class="carousel-indicators doctor_indicators">
            <?php
            // Generate carousel indicators dynamically
            foreach ($data as $index => $video) {
                echo '<button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="' . $index . '"';
                echo $index === 0 ? ' class="active"' : '';  // Set first item as active
                echo ' aria-label="Slide ' . ($index + 1) . '"></button>';
            }
            ?>
        </div>

        <div class="carousel-inner">
            <?php
            // Generate carousel items dynamically
            foreach ($data as $index => $video) {
                $activeClass = $index === 0 ? 'active' : '';  // Set first item as active
                $videoSource = $video['video_data'];  // Video source from the database
                $description = $video['description'];  // Description from the database
                ?>
                <div class="carousel-item <?php echo $activeClass; ?>">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="video_prp">
                                <div class="video-container">
                                    <!-- Video Player -->
                                    <?php if ($videoSource): ?>
                                        <!-- <video id="myVideo<?php echo $video['id']; ?>" width="600" height="300" controls muted>
                                            <source src="<?php echo $videoSource; ?>" type="video/mp4">
                                            <source src="<?php echo $videoSource; ?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video> -->
                                        <video id="myVideo1" width="600" height="300" controls muted>
                                            <source src="data:video/mp4;base64,<?php echo $videoSource; ?>" type="video/mp4">
                                            <source src="data:video/ogg;base64,<?php echo $videoSource; ?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php else: ?>
                                        <p>No video available.</p>
                                    <?php endif; ?>

                                    <!-- Description -->
                                    <p><?php echo htmlspecialchars($description); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 doct_gap2 os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-left" data-aos-duration="1000">
                        <div id="carouselExampleFade2" class="carousel slide carousel-slide">
                            <div class="carousel-indicators doctor_indicators">
                                <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="video_prp">
                                            <video id="myVideo1" width="600" height="300" controls muted>
                                                        <source src="assets/videos/doctors-video.mp4" type="video/mp4">
                                                        <source src="assets/videos/doctors-video.mp4" type="video/ogg">
                                                        
                                                        </video>
                                                <p>We are highly skilled professionals with extensive experience,
                                                    offering personalized care and staying
                                                    updated with the latest advancements.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="video_prp">
                                            <video id="myVideo1" width="600" height="300" controls muted>
                                                        <source src="assets/videos/doctors-video.mp4" type="video/mp4">
                                                        <source src="assets/videos/doctors-video.mp4" type="video/ogg">
                                                        
                                                        </video>
                                                <p>We are highly skilled professionals with extensive experience,
                                                    offering personalized care and staying
                                                    updated with the latest advancements.</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="video_prp">
                                            <video id="myVideo1" width="600" height="300" controls muted>
                                                        <source src="assets/videos/doctors-video.mp4" type="video/mp4">
                                                        <source src="assets/videos/doctors-video.mp4" type="video/ogg">
                                                        
                                                        </video>

                                                <p>We are highly skilled professionals with extensive experience,
                                                    offering personalized care and staying
                                                    updated with the latest advancements.</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container-fluid">
                <div class="main_title">
                    <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-down"
                        data-aos-duration="1000">Our Services</h2>
                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_diabeties1.webp"
                                alt="doctor image" class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_heart.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetes Heart</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_kidney.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_kidney.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetes Kidney</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_eye.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_eye.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetic Retinopathy</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_leg.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_foot.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetes Foot Care</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_dental.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_teath.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetes Dental</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_service1.webp" alt="doctor image"
                                class="img-fluid fasilty">

                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_1.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Erectile Dysfunction</h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img fasilty">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_adult.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_niddle.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Adult Vaccination</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img fasilty">
                            <img src="<?php echo $base_url; ?>assets/images/home/day_care.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_niddle.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Day Care Center</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img fasilty">
                            <img src="<?php echo $base_url; ?>assets/images/home/index-cgms.webp" alt="doctor image"
                                class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_niddle.webp" alt="doctor image" class="img-fluid">-->
                                <h4>CGMS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" class="os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
                        <div class="facilites_img fasilty">
                            <img src="<?php echo $base_url; ?>assets/images/home/index-diabetes-reversal.webp"
                                alt="doctor image" class="img-fluid fasilty">
                            <div class="service_icon">
                                <!--<img src="<?php echo $base_url; ?>assets/images/home/icon_niddle.webp" alt="doctor image" class="img-fluid">-->
                                <h4>Diabetes Reversal</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="infrastructure">
            <div class="container-fluid">
                <div class="infra">
                    <h2 class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500" data-aos="fade-down"
                        data-aos-duration="1000">Infrastructure</h2>
                    <div class="view_btn">
                        <a href="<?php echo $base_url; ?>gallery" class="viewmore">View More</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4" class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                        data-aos="fade-up" data-aos-duration="1000">
                        <div class="infra_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/laboratory.webp" alt="doctor image"
                                class="img-fluid">

                        </div>
                        <div class="infra_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/patient_care.webp" alt="doctor image"
                                class="img-fluid">

                        </div>
                    </div>
                    <div class="col-lg-4" class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                        data-aos="fade-up" data-aos-duration="1000">

                        <div class="infra_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/fundus_ai.webp" alt="doctor image"
                                class="img-fluid">

                        </div>
                    </div>
                    <div class="col-lg-4" class="os-init aos-animate" data-aos-easing="linear" data-aos-delay="500"
                        data-aos="fade-up" data-aos-duration="1000">
                        <div class="infra_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/diet1.webp" alt="doctor image"
                                class="img-fluid">

                        </div>
                        <div class="infra_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/dia-care_pharmacy.webp"
                                alt="doctor image" class="img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Masking Testimonials as Dynamic  -->
        <section class="testimonials">
            <div class="container">
                <div class="testi_title">
                    <h3>Patients <span>Testimonials</span></h3>
                </div>
                <div class="row">
                    <!-- Testimonials with Images -->
                    <div class="col-lg-7 col-md-12 col-sm-12 patient_testi_1 os-init aos-animate"
                        data-aos-easing="linear" data-aos-delay="500" data-aos="fade-right" data-aos-duration="1000">
                        <div id="carouselExampletesti" class="carousel slide">
                            <div class="carousel-indicators">
                                <?php
                                $con = mysqli_connect('srv1328.hstgr.io', 'u629694569_carehospital', 'Kakatiya1234$', 'u629694569_carediabetesce');
                                if (!$con) {
                                    die("Database connection failed: " . mysqli_connect_error());
                                }

                                $query = "SELECT * FROM patient_testimonials WHERE image IS NOT NULL";
                                $resultWithImage = mysqli_query($con, $query);
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($resultWithImage)) {
                                    $active = $i === 0 ? 'active' : '';
                                    echo "<button type='button' data-bs-target='#carouselExampletesti' data-bs-slide-to='$i' class='$active' aria-label='Slide " . ($i + 1) . "'></button>";
                                    $i++;
                                }
                                ?>
                            </div>
                            <div class="carousel-inner">
                                <?php
                                mysqli_data_seek($resultWithImage, 0);
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($resultWithImage)) {
                                    $active = $i === 0 ? 'active' : '';
                                    $imageSrc = 'data:image/png;base64,' . base64_encode($row['image']);
                                    ?>
                                    <div class="carousel-item <?php echo $active; ?>">
                                        <div class="card">
                                            <div class="card_imge">
                                                <img src="<?php echo $imageSrc; ?>" class="img-fluid"
                                                    alt="<?php echo $row['description']; ?>">
                                            </div>
                                            <div class="card_body">
                                                <p><?php echo $row['description']; ?></p>
                                                <div class="patient_name">
                                                    <h6><?php echo $row['testimonial_name']; ?></h6>
                                                    <p><?php echo $row['testimonial_address']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials without Images -->
                    <div class="col-lg-5 col-md-12 col-sm-12 empty_card os-init aos-animate" data-aos-easing="linear"
                        data-aos-delay="500" data-aos="fade-left" data-aos-duration="1000">
                        <div id="carouselExampletesti2" class="carousel slide">
                            <div class="carousel-indicators">
                                <?php
                                $queryNoImage = "SELECT * FROM patient_testimonials WHERE image IS NULL";
                                $resultNoImage = mysqli_query($con, $queryNoImage);
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($resultNoImage)) {
                                    $active = $i === 0 ? 'active' : '';
                                    echo "<button type='button' data-bs-target='#carouselExampletesti2' data-bs-slide-to='$i' class='$active' aria-label='Slide " . ($i + 1) . "'></button>";
                                    $i++;
                                }
                                ?>
                            </div>
                            <div class="carousel-inner">
                                <?php
                                mysqli_data_seek($resultNoImage, 0);
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($resultNoImage)) {
                                    $active = $i === 0 ? 'active' : '';
                                    ?>
                                    <div class="carousel-item <?php echo $active; ?>">
                                        <div class="card">
                                            <div class="card_body">
                                                <p><?php echo $row['description']; ?></p>
                                                <div class="patient_name">
                                                    <h6><?php echo $row['testimonial_name']; ?></h6>
                                                    <p><?php echo $row['testimonial_address']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>









        <!-- Ending of Yestimonials -->
    




        <?php include 'footer.php' ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
</body>



</html>