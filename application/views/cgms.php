<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head_links.php' ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/service.css">
</head>

<body>

    <?php include 'header.php' ?>

    <section class="about_inn_main">
         <div class="inner_bnr_sec">
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/cgms-banner.webp">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2>CGMS</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span>CGMS</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service_details_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service_details_sec">
                        <img src="<?php echo $base_url; ?>assets/images/inner/cgms-devices.webp" class="img-fluid" alt="service details" loading="lazy" decoding="async">
                        <h3>CGMS</h3>
                        <p>A Continuous Glucose Monitoring System (CGMS) is a device that tracks blood sugar levels continuously throughout the day and night.
							 It uses a tiny sensor inserted under the skin to measure glucose levels in the fluid between cells. The system sends this data to 
							 a display device, such as a monitor or smartphone, providing real-time updates and trends. CGMS helps individuals, especially those
							  with diabetes, better understand how their blood sugar changes in response to food, activity, and medications. It also provides 
							  alerts for high or low glucose levels, making it a valuable tool for managing blood sugar effectively.</p>
                        <!-- 
                        <h4>SERVICES FEATURES</h4>
                        <hr>
                        <ul>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Delivery Flexibility
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Professional Service
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Tracking
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Timely Delivery
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Secure Handling
                            </li> -->
                        <!-- <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Emergency Assistance
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="service_details_form">
                        <h3>MAKE AN APPOINTMENT</h3>
                        <form action="">
                            <div class="service_input">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
                            </div>
                            <div class="service_input">
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Child</option>
                                </select>
                            </div>
                            <div class="service_input">
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Select Department</option>
                                    <option value="1">Erectile Dysfunction</option>
                                    <option value="2">Diabetic Retinopathy</option>
                                    <option value="3">Diabetes Foot Care</option>
                                    <option value="3">Diabetes Foot Care</option>
                                    <option value="3">Diabetes Kidney</option>
                                </select>
                            </div>
                            <div class="service_input">
                                <input type="submit" placeholder="Submit" class="form-control form_link" id="exampleInputEmail1" required>
                            </div>
                        </form>
                    </div> -->


                    <div class="service_details_form doctor_details">
                        <h3>Expert Doctor</h3>
                        <div class="doctor_img">
                            <img src="<?php echo $base_url; ?>assets/images/home/care_doctor.webp" class="img-fluid" alt="doctor profile" loading="lazy" decoding="async">
                            <div class="service_doctor_details">
                                <h4>Dr. saini Venkateswarlu</h4>
                                <p>MD</p>
                                <a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="service_details_form doctor_details hour_sec">
                        <h3>Opening hours</h3>
                        <div class="service_details_hours">
                            <div class="service_details_hour_inn">
                                <p>Mon - Sat :</p>
                                <p>7:00 am to 5:00pm</p>
                            </div>
                            <!-- <div class="service_details_hour_inn">
                                <p>Sunday :</p>
                                <p>7:00 am to 12:00pm</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

</body>

</html>
