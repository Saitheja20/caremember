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

$query = "SELECT id,image,name, specialized_in FROM doctors_data2";
$result = $con->query($query);

$data = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        if (!empty($row['image'])) {
            $row['image'] = base64_encode($row['image']);
        } else {
            $row['image'] = null;
        }
        $data[] = $row;
    }
}

$count = 1; // Initialize counter for doctor numbers
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head_links.php' ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/responsive.css">
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
                        <h2>Our Doctor's</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo $base_url; ?>">Home</a></li>
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <li><span>Our Doctor's</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team_main">
        <div class="container">
            <div class="team_head">
                <h2><span>Our</span> Doctor's</h2>
            </div>

            <div class="doctor-slider">
                <?php foreach ($data as $row): ?>
                    <div class="team_card_sec">
                        <span class="count-text"><?php echo $count++; ?></span>
                        <div class="team_img">
                            <!-- Display the base64 encoded image -->
                            <img src="data:image/jpeg;base64,<?php echo $row['image']; ?>" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
                        </div>
                    <!-- <div class="team_text">
												<h3><?php echo htmlspecialchars($row['name']); ?></h3>
												<p><?php echo htmlspecialchars($row['specialized_in']); ?></p>
												<a href="<?php echo $base_url ?>doctors_info.php" onclick="setDoctorId(<?php echo $row['id']; ?>)">View Profile</a>
										</div> -->
										 <div class="team_text">
												<h3><?php echo htmlspecialchars($row['name']); ?></h3>
												<p><?php echo htmlspecialchars($row['specialized_in']); ?></p>
												<a href="<?php echo $base_url ?>doctors_info?id=<?php echo $row['id']; ?>" onclick="setDoctorId(<?php echo $row['id']; ?>)">View Profile</a>
										</div>


                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.doctor-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
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
<script>
    // Function to set doctor ID in sessionStorage
    function setDoctorId(doctorId) {
        // Set the sessionStorage key 'doctorid' to the doctor ID
        sessionStorage.setItem('doctorid', doctorId);
    }
</script>

</body>

</html>
