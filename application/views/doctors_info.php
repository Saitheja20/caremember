

<?php
// Database connection settings
$servername = "srv1328.hstgr.io";  // Database server
$username = "u629694569_carehospital";         // Database username
$password = "Kakatiya1234$";             // Database password
$dbname = "u629694569_carediabetesce";  // Your database name

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if (isset($_GET['id'])) {
    $doctorId = intval($_GET['id']); // Get the doctor ID from URL
} else {
    // If no ID is passed, you can set a default ID or handle the error
    $doctorId = 72; // Example: default to doctor with ID 76
}


// $doctorId = isset($_GET['doctorid']) ? intval($_GET['doctorid']) : (isset($_SESSION['doctorId']) ? $_SESSION['doctorId'] : 76);  // Default to 76 if not set
$query = "SELECT * FROM doctors_data2 WHERE id = $doctorId";  // Query to fetch doctor data
$result = $con->query($query);

$data = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        if (!empty($row['image'])) {
            $row['image'] = base64_encode($row['image']);  // Convert image to base64
        } else {
            $row['image'] = null;  // If no image, set as null
        }
        $data[] = $row;  // Add the row to the data array
    }
}

$doctor = $data[0];  // Assuming you're fetching a single doctor, get the first record
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head_links.php' ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
</head>

<body>

    <?php include 'header.php' ?>

    <section class="about_inn_main">
        <div class="inner_bnr_sec">
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/inner_banner15.png" alt="Inner Banner">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2><?= htmlspecialchars($doctor['name']); ?></h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="index">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span><?= htmlspecialchars($doctor['name']); ?></span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="doctor_profile_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctor_img">
                        <!-- Dynamically display the doctor's image from the database -->
                        <img src="<?= !empty($doctor['image']) ? 'data:image/jpeg;base64,' . $doctor['image'] : 'path/to/placeholder_image.jpg'; ?>" class="img-fluid" alt="doctor profile" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="doctor_text">
                        <!-- Dynamically display the doctor's name -->
                        <h3><?= htmlspecialchars($doctor['name']); ?></h3>
                        <!-- Dynamically display qualifications -->
                        <span class="doctor_occp">MBBS,<?= htmlspecialchars($doctor['qualification']); ?></span> <br>
                        <!-- Dynamically display specialization -->
                        <span>Specialist in <?= htmlspecialchars($doctor['specialized_in']); ?></span>
                        <p><?= htmlspecialchars($doctor['about_doctor']); ?></p>
                        <div class="doctor_book_sec">
                            <div class="doctor_cont_sec">
                                <!-- Dynamically display experience -->
                                <div class="doctor_contact">
                                    <h4>Experience : </h4>
                                    <p><?= htmlspecialchars($doctor['total_experience']); ?> Years</p>
                                </div>
                                <!-- Dynamically display email -->
                                <div class="doctor_contact">
                                    <h4>Email : </h4>
                                    <p><a href="mailto:<?= htmlspecialchars($doctor['email']); ?>"><?= htmlspecialchars($doctor['email']); ?></a></p>
                                </div>
                                <!-- Dynamically display phone number -->
                                <div class="doctor_contact">
                                    <h4>Phone : </h4>
                                    <p><a href="tel:<?= htmlspecialchars($doctor['phone']); ?>"><?= htmlspecialchars($doctor['phone']); ?></a></p>
                                </div>
                            </div>

                            <!-- Dynamically generate the booking link -->
                            <div class="doctor_book_inn">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScJDTOMdt-TKwfuNIkP4dOn3yzVwyqLh6kWJW4OWEmeKbpvsA/viewform" target="_blank">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="doctor_experience">
                        <h3>Personal Experience</h3>
                        <!-- Dynamically display the doctor's personal experience -->
                        <p><?= htmlspecialchars($doctor['message']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

	<!-- <script>
   function getdoctorId() {
    // Get the doctorId from sessionStorage
    const doctorId = sessionStorage.getItem('doctorid');
    console.log(doctorId); // Log it to check if it's being retrieved

    // If the doctorId exists, redirect to the same page with the doctorId in the URL
    if (doctorId) {
        // Redirect to the current page with doctorId as a query parameter
        window.location.href = window.location.pathname + '?doctorid=' + doctorId;

        // Clear the session storage after redirecting
        sessionStorage.removeItem('doctorid');
    } else {
        console.log('No doctor ID found in sessionStorage');
    }
}

</script> -->

</body>

</html>

