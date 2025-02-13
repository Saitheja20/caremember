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
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/inner_banner21.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2>Physiotherapy</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span>Physiotherapy</span></li>
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
                        <img src="<?php echo $base_url; ?>assets/images/inner/physiotrerapy.webp" class="img-fluid" alt="service details" loading="lazy" decoding="async">
                        <h3>Physiotherapy</h3>
                        <p>Physiotherapy is a healthcare discipline focused on improving movement and function through physical
                            methods. It involves assessing, diagnosing, and treating various physical impairments, disabilities, and
                            pain. Physiotherapists use techniques such as exercise, manual therapy, and modalities like heat or cold
                            therapy to enhance physical function and alleviate pain. They design personalized treatment plans
                            based on individual needs, aiming to restore mobility, strength, and flexibility. Physiotherapy is often
                            employed for rehabilitation after surgery or injury, managing chronic conditions, and preventing further
                            complications. It also plays a role in improving overall physical fitness and quality of life. Educating
                            patients on body mechanics, posture, and self-management strategies is a key component.
                            Physiotherapists work in diverse settings, including hospitals, clinics, and home care. Their approach is
                            evidence-based, combining clinical expertise with the latest research. Overall, physiotherapy supports
                            holistic health by addressing physical limitations and promoting optimal functioning.</p>
                        <!-- 
                        <h4>SERVICES FEATURES</h4>
                        <hr>
                        <ul>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Assessment and Diagnosis
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Personalized Treatment Plans
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Manual Therapy
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Exercise Therapy
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Pain Management
                            </li> -->
                        <!-- <li>
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                Emergency Assistance
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service_details_form">
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
                    </div>


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