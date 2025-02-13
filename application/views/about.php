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
$query = "SELECT * FROM about_us WHERE status = 1";  // Query to fetch doctor data
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

$doctor = $data[0];




$query2 = "SELECT id,image,name, specialized_in FROM doctors_data2 WHERE status LIKE 1";
$result2 = $con->query($query2);

$data2 = [];
if ($result2) {
    while ($row = $result2->fetch_assoc()) {
        if (!empty($row['image'])) {
            $row['image'] = base64_encode($row['image']);
        } else {
            $row['image'] = null;
        }
        $data2[] = $row;
    }
}

$count = 1; // Initialize counter for doctor numbers// Assuming you're fetching a single doctor, get the first record
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_links.php' ?>
	<!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css"> -->

	<style>
		.about_two_text_sec h2 {
			display: flex;
			flex-direction: column;
			text-transform: none;
			font-size: 50px;
			color: var(--skyblue);
		}

		.about_two_text_sec h2 span {
			font-size: unset;
			font-style: unset;
			color: var(--blue);
		}

		.about_inn_img img {
			width: 100%;
			margin-top: 230px;
		}

		@media(max-width:991px) {
			.about_inn_img img {
				margin-top: -40px;
			}
		}
	</style>

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
						<h2>About Us</h2>
						<div class="breadcrumb__menu">
							<nav>
								<ul>
									<li><a href="<?php echo $base_url; ?>">Home</a></li>
									<i class="fa-solid fa-chevron-right"></i>
									<li><span>About Us</span></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="about_two">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_two_text_sec">
						<h5>About</h5>
						<h2><span>Care</span> Diabetes <br> Centre</h2>
						<hr>
						<p><?= htmlspecialchars($doctor['description']); ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_inn_img">
						<img src="<?= !empty($doctor['image']) ? 'data:image/jpeg;base64,' . $doctor['image'] : 'path/to/placeholder_image.jpg'; ?>" class="img-fluid" alt="doctor profile" loading="lazy" decoding="async">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="Our_sec">
						<div>
							<i class="fa-solid fa-eye fa-fw"></i>
						</div>
						<div>
							<h3>Our Vision</h3>
							<p><?= htmlspecialchars($doctor['vision']); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="Our_sec">
						<div>
							<i class="fa-solid fa-paper-plane"></i>
						</div>
						<div>
							<h3>Our Mission</h3>
							<p><?= htmlspecialchars($doctor['mission']); ?></p>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-4">
          <div class="Our_sec">
            <div>
              <i class="fa-solid fa-handshake"></i>
            </div>
            <div>
              <h3>Core Values</h3>
              <p>We’re driven by the values we follow. Checkout our 5 core values – Idea Team adhere to</p>
            </div>
          </div>
        </div> -->
			</div>

		</div>
	</section>


	<section class="expert_main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="expert_sec">
						<div class="row">
							<div class="col-lg-4 col-md-12 col-sm-12">
								<div class="expert_text">
									<h3><?= htmlspecialchars($doctor['years_of_exp']); ?> Years of <br> Experience</h3>
								</div>
							</div>

							<div class="col-lg-4 col-md-12 col-sm-12">
								<div class="expert_text">
									<h3><?= htmlspecialchars($doctor['happy_patients']); ?>+ Happy <br> Patients</h3>
								</div>
							</div>

							<div class="col-lg-4 col-md-12 xol-sm-12">
								<div class="expert_text">
									<h3><?= htmlspecialchars($doctor['experience_doctors']); ?>+ Experienced <br> Doctors</h3>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="expert_second_row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="expert_sec">
						<div class="row">
							<div class="col-lg-4">
								<div class="expert_text">
									<h3><?= nl2br(htmlspecialchars(str_replace("\\n", "\n", $doctor['COM']))); ?></h3>

								</div>
							</div>

							<div class="col-lg-4">
								<div class="expert_text">
									<h3><?= nl2br(htmlspecialchars(str_replace("\\n", "\n", $doctor['online_consulting']))); ?></h3>

								</div>
							</div>

							<div class="col-lg-4">
								<div class="expert_text">

									<h3><?= nl2br(htmlspecialchars(str_replace("\\n", "\n", $doctor['lab_home_services']))); ?></h3>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- <section class="team_main">
		<div class="container">
			<div class="team_head">
				<h2><span>Our</span> Team</h2>
			</div>
			<div class="team_sliders">
				<div class="team_card_sec">
					<span class="count-text">1</span>
					<div class="team_img">
						<img src="<?php echo $base_url; ?>assets/images/home/care_doctor.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Saini Venkateswarlu</h3>
						<p>M.D</p>
					
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">2</p>
					<div class="team_img">
						<img src="<?php echo $base_url; ?>assets/images/home/care_doctor2.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Ganta Vandana</h3>
						<p>M.D</p>
					
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">3</p>
					<div class="team_img">
						<img src="assets/images/home/Dr_Madhavi_Cardiologist.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Madhavi</h3>
						<p>Cardiologist</p>
						<a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">4</p>
					<div class="team_img">
						<img src="assets/images/home/Dr_Vidyasagar_General_Surgeon.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Vidhyasagar</h3>
						<p>General Surgeon</p>
						<a href="<?php echo $base_url; ?>">View Profile</a>
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">5</p>
					<div class="team_img">
						<img src="assets/images/home/Dr_Mrunalini_Dental.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Mrunalini</h3>
						<p>Dental</p>
						<a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">6</p>
					<div class="team_img">
						<img src="assets/images/home/Dr_Ajay_Physio.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Ajay</h3>
						<p>Physiotherapist</p>
						<a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">7</p>
					<div class="team_img">
						<img src="assets/images/home/care_doctor3.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr Bharadwaj Batchu</h3>
						<p>Nephrologist</p>
						<a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
					</div>
				</div>
				<div class="team_card_sec">
					<p class="count-text">7</p>
					<div class="team_img">
						<img src="assets/images/home/Dr_Navaneeth_General_Physician.webp" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
					</div>
					<div class="team_text">
						<h3>Dr. Navaneeth</h3>
						<p>General Physician</p>
						<a href="<?php echo $base_url; ?>venkateswarlu">View Profile</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<section class="team_main">
    <div class="container">
        <div class="team_head">
            <h2><span>Our</span> Team</h2>
        </div>
        <div class="team_sliders">
            <?php
            // Loop through the fetched doctor data to create the team cards dynamically
            foreach ($data2 as $index => $doctor2) {
                // Display doctor info dynamically
                $doctorId = $doctor2['id'];  // Fetch the doctor ID
                $doctorImage = !empty($doctor2['image']) ? 'data:image/jpeg;base64,' . $doctor2['image'] : 'path/to/placeholder_image.jpg'; // Set the image source
                $doctorName = htmlspecialchars($doctor2['name']);  // Escape doctor name to prevent XSS
                $doctorSpecialization = htmlspecialchars($doctor2['specialized_in']); // Escape specialization

                // Set the profile URL dynamically
                $profileUrl = $base_url . "doctors_info.php?id=" . $doctorId;
            ?>
                <div class="team_card_sec">
                    <span class="count-text"><?= $index + 1; ?></span>
                    <div class="team_img">
                        <img src="<?= $doctorImage; ?>" class="img-fluid" alt="doctor" loading="lazy" decoding="async">
                    </div>
                    <div class="team_text">
                        <h3><?= $doctorName; ?></h3>
                        <p><?= $doctorSpecialization; ?></p>
                        <a href="<?= $profileUrl; ?>">View Profile</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


	<?php include 'footer.php' ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.team_sliders').slick({
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


</body>



</html>
