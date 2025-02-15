<?php
$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_carehospital', 'Kakatiya1234$', 'u629694569_carediabetesce');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Use a parameterized query with a placeholder for the id
    $query = "SELECT id,header,image_for_service_details,description_of_service,banner_image_for_service FROM services WHERE id = ?";

    // Prepare the query
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameter to the prepared statement
    mysqli_stmt_bind_param($stmt, 'i', $id); // 'i' stands for integer

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result of the query
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Invalid query: " . mysqli_error($con));
    } else {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            if (!empty($row['image_for_service_details'])) {
                $row['image_for_service_details'] = base64_encode($row['image_for_service_details']);
            } else {
                $row['image_for_service_details'] = null;
            }
			 if (!empty($row['banner_image_for_service'])) {
                $row['banner_image_for_service'] = base64_encode($row['banner_image_for_service']);
            } else {
                $row['banner_image_for_service'] = null;
            }
            $data[] = $row;
        }
		if (count($data) > 0) {
        // echo $data[0]['id'];  // Assuming you're expecting only one result
    } else {
        echo "No data found for the given ID.";
    }
    }
}
?>


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
           <img src="data:image/jpeg;base64,<?php echo $data[0]['banner_image_for_service']; ?>" class="img-fluid icon-img" alt="service-banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2><?php  echo $data[0]['header']; ?></h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span><?php  echo $data[0]['header']; ?></span></li>
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
                        <img src="data:image/jpeg;base64,<?php echo $data[0]['image_for_service_details']; ?>" class="img-fluid icon-img" alt="service-icon">
						<!-- <img src="<?php echo $base_url; ?>assets/images/inner/cgms-devices.webp" class="img-fluid" alt="service details" loading="lazy" decoding="async"> -->
                        <h3><?php  echo $data[0]['header']; ?></h3>
                        <p><?php  echo $data[0]['description_of_service']; ?></p>
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
