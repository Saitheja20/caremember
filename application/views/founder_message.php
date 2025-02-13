

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


// $doctorId = isset($_GET['doctorid']) ? intval($_GET['doctorid']) : (isset($_SESSION['doctorId']) ? $_SESSION['doctorId'] : 76);  // Default to 76 if not set
$query = "SELECT * FROM founder_info";  // Query to fetch doctor data
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
                        <p><?= htmlspecialchars($doctor['founder_message']); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 founder_img_sec">
                    <div class="founder_img">
                        <img src="<?= !empty($doctor['image']) ? 'data:image/jpeg;base64,' . $doctor['image'] : 'path/to/placeholder_image.jpg'; ?>" class="img-fluid" alt="doctor profile" loading="lazy" decoding="async">
                    </div>
                    <div class="crm_text crm_text1">
                        <p><span><?= htmlspecialchars($doctor['name']); ?></span> </p>
                        <p><?= htmlspecialchars($doctor['qualification']); ?></p>

                        <!--<h5>Diabetologist</h5>-->
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include 'footer.php' ?>
</body>



</html>
