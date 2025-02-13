<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head_links.php' ?>

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/contact.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
</head>

<body>

    <?php include 'header.php' ?>

    <section class="about_inn_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2>Book An Appointment</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span>Book An Appointment</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book_an_appointment_main">
        <div class="container">
            <div class="row book_row">
                <div class="col-md-12 col-lg-6">
                    <div class="appointment-form_wrap">
                        <div class="heading-style1">
                            <span>Online Booking</span>
                            <h2>Make an Appointment</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="email" class="form-control form-custom" placeholder="Enter Your Name">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="email" class="form-control form-custom" placeholder="Enter Email ID">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="number" class="form-control form-custom" placeholder="Enter phone number">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Select location">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Choose department">
                                        <i class="far fa-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-cutom">
                                        <input type="text" class="form-control form-custom" placeholder="Select doctor">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-group-cutom">
                                        <input type="date" class="form-control form-custom">
                                        <!--<i class="far fa-user"></i>-->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-cutom">
                                        <label for="exampleFormControlTextarea1">Your Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?php echo $base_url; ?>#" class="btn btn-success">BOOK NOW</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="why-choose_block">
                        <div class="heading-style1">
                            <span>Why Us</span>
                            <h2>Why Choose Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do eius mod tempor inc ididuntut</p>
                            <hr>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="<?php echo $base_url; ?>assets/images/inner/icon1.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Diabetes Speciality</h4>
                                <p>First Centre for dedicated diabetes speciality <br> in north telangana region</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="<?php echo $base_url; ?>assets/images/inner/icon2.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Fastest Growing Clinic</h4>
                                <p>Total Diabetes Care</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="<?php echo $base_url; ?>assets/images/inner/icon3.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Foot Print</h4>
                                <p>25 Years of foot print in diabetes care</p>
                            </div>
                        </div>
                        <div class="whychoose-wrap">
                            <img src="<?php echo $base_url; ?>assets/images/inner/icon4.png" alt="#">
                            <div class="whychoose-text_block">
                                <h4>Services</h4>
                                <p>All services available under one roof</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include 'footer.php' ?>
</body>

</html>