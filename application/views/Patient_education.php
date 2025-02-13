<?php 


// Database connection settings
$servername = "srv1328.hstgr.io";  // Database server
$username = "u629694569_carehospital";         // Database username
$password = "Kakatiya1234$";             // Database password
$dbname = "u629694569_carediabetesce";  // Your database name // Your database name

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM doctors_data2";
$result = mysqli_query($con, $query);

$data = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (!empty($row['image'])) {
            $row['image'] = base64_encode($row['image']);
        } else {
            $row['image'] = null;
        }
        $data[] = $row;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'head_links.php' ?>
   <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
   <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
   <style>
       .Patient_main .gallery-image img{
           height:auto;
       }
   </style>
</head>

<body>

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
     $query = "SELECT id, title, image FROM patient_education ORDER BY id DESC";
     $result = mysqli_query($con, $query);

     // Close the database connection
     mysqli_close($con);
   ?>

   <section class="about_inn_main">
       <div class="inner_bnr_sec">
            <img src="https://kakatiyasolutions.in/care_diabeties/assets/images/inner/inner_banner16.png">
        </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb__content">
                  <h2>Patient Education</h2>
                  <div class="breadcrumb__menu">
                     <nav>
                        <ul>
                           <li><a href="<?php echo $base_url; ?>">Home</a></li>
                           <i class="fa-solid fa-chevron-right"></i>
                           <li><span>Patient Education</span></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="inner-gallery-page Patient_main">

      <div class="container">

         <div class="title">
            <h2>Patient Education</h2>
         </div>

         <div class="row">
            <?php
            // Check if the result contains rows
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Get image data and title from the database
                    $imageData = $row['image'];
                    $title = $row['title'];
                    // Encode image data for inline display
                    $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
            ?>

            <!-- <div class="col-lg-4">
               <div class="gallery-image">
                  <a href="<?php echo $imageSrc; ?>" data-fancybox="gallery" data-caption="<?php echo $title; ?>">
                     <img src="<?php echo $imageSrc; ?>" alt="Image Gallery" class="img-fluid">
                  </a>
               </div>
            </div> -->
            <div class="col-lg-4">
               <div class="card gallery-image">
               <a href="<?php echo $imageSrc; ?>" data-fancybox="gallery" data-caption="Caption Images 1">

<!-- <img src="<?php echo $base_url; ?>assets/images/gallery/Patient2.png" alt="Image Gallery" class="img-fluid"> -->
<img src="<?php echo $imageSrc; ?>" class="card-img-top img-fluid" alt="<?php echo $title; ?>">
</a>
<!-- <img src="<?php echo $imageSrc; ?>" class="card-img-top img-fluid" alt="<?php echo $title; ?>"> -->
                  <!-- <div class="card-body">
                     <h5 class="card-title"><?php echo $title; ?></h5>
                     <a href="<?php echo $imageSrc; ?>" data-fancybox="gallery" data-caption="<?php echo $title; ?>" class="btn btn-primary">View Image</a>
                  </div> -->
               </div>
            </div>

            <?php
                }
            } else {
                echo "No images found.";
            }
            ?>
         </div>
      </div>

   </section>

   <?php include 'footer.php' ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" async></script>
   <script>
      $('[data-fancybox="gallery"]').fancybox({
         buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
         ],
         loop: false,
         protect: true
      });
   </script>
</body>

</html>
