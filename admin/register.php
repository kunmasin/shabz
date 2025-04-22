<?php
$fullName = $usernames = $passwords = $email = $address = $phoneNumber = $images = $target_file="";
$uploadOk = 1;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $fullName = test_input($_POST["fullName"]);
    $usernames = test_input($_POST["usernames"]);
    $passwords = test_input($_POST["passwords"]);
    $email = test_input($_POST["email"]);
    $address = test_input($_POST["address"]);
    $phoneNumber = test_input($_POST["phoneNumber"]);
}// Image Upload
if (isset($_FILES["images"]) && $_FILES["images"]["error"] == 0) {
    $target_dir = "images/";
    $image_name = time() . '_' . basename($_FILES["images"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $maxFileSize = 5000000; // 5MB

    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if ($check === false) {
        $imageErr = "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["images"]["size"] > $maxFileSize) {
        $imageErr = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            $image = $target_file; // Store the file path for database insertion.
        } else {
            $imageErr = "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $imageErr = "Please upload an image.";
}

// Database Insertion (Example - you'll need to adapt this)
if (empty($namesErr) && empty($emailErr) && empty($passwordErr) && empty($lvl_admittedErr) && empty($dobErr) && empty($matric_noErr) && empty($courseErr) && empty($facultyErr) && empty($genderErr) && empty($phoneNumberErr) && empty($imageErr)) {
    // Database connection and insertion logic here
    // Example (using PDO):
    /*
    $pdo = new PDO("mysql:host=localhost;dbname=your_database", "your_user", "your_password");
    $stmt = $pdo->prepare("INSERT INTO users (names, email, password, level, dob, matric, course, faculty, gender, phone, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$names, $email, $hashedPassword, $lvl_admitted, $dob, $matric_no, $course, $faculty, $gender, $phoneNumber, $image]);
    echo "Registration successful!";
    */
}


function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUNG SHABZ RENTALS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c5355fa9b1.js" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../imgs/shabz logo.png" alt="Young Shabz Rentals Logo" width="120" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cars">CARS</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="mailto:oniyeabdullahi00@gmail.com">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--End of Navigation -->
    
    <!--Car Background-->
    <!-- Hero Section -->
    <section class="hero-section car-background">
        <div class="container">
            <div class="hero-content text-center text-white">
                <p class="lead">BOOK OUR LUXURY CARS AT COMPETITIVE PRICES</p>
                <h1 class="display-4 fw-bold mb-5">YOUNG SHABZ CAR RENTAL</h1>
                
                <div class="booking-form bg-white text-black rounded p-4">
                    <p>Young Shabz Rentals has been the industry leader in luxury car rentals since 2015, offering unparalleled service and the finest selection of vehicles.</p>
                    <p>Don't just take our word for it - hear from our satisfied customers about their experiences with Young Shabz Rentals.</p>
                </div>
            </div>
        </div>
    </section>

    <!--End of Car Background-->

    

<!--Registeration Details-->

<div class="m-5">
<div class="text-center">
<h1 class="font-weight-bold"> REGISTERATION PAGE </h1>
</div>

<form method="post" class="container" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="">
        <label for="">Full Name:</label><br>
        <input class="form-control" type="text" name="fullName" placeholder="Enter Your Fullname"><br>
    </div>

    <div>
        <label for="">Username:</label><br>
        <input class="form-control" type="text" name="usernames" placeholder="Enter Your Username"><br>
    </div>

    <div>
        <label for="">Password:</label><br>
        <input class="form-control" type="password" name="passwords" placeholder="Enter Your Password"><br>
    </div>

    <div>
        <label for="">Email Address:</label><br>
        <input class="form-control" type="email" name="email" placeholder="Enter Your Email-Address"><br>
    </div>

    <div class="">
        <label for="">Click to Insert Your Profile Image</label>
        <input type="file" class="form-control" name="images" placeholder="Upload Your Image"><br>
    </div>

    <div>
        <label for="">Address:</label><br>
        <input class="form-control" type="text" name="address" placeholder="Enter Your Address"><br>
    </div>

    <div>
        <label for="">Phone Number:</label><br>
        <input class="form-control" type="text" name="phoneNumber" placeholder="Enter Your Phone Number"><br>
    </div>

    <button class="btn btn-primary mx-2">REGISTER</button>
    <p class="mt-4">If you have registered already kindly <a class="text-danger" href="login.html">LOGIN</a></p>

</form>

</div>
<!--End of Registration Details-->

  <!-- CTA Section -->
  <section class="cta-section py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Experience Premium Car Rental?</h2>
            <p class="lead mb-5">Join thousands of satisfied customers who trust Young Shabz Rentals for their transportation needs.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="register.php" class="btn btn-light btn-lg px-4">Register Now</a>
                <a href="mailto:oniyeabdullahi00@gmail.com" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
            </div>
        </div>
    </section>
    <!--End of CTA Section -->


    <!-- Footer -->
    <footer class="bg-white text-white pt-5">
        <div class="container text-black">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="../imgs/shabz logo.png" alt="Logo" width="120" class="mb-3" loading="lazy">
                    <p class="mb-4">Premium car rental service offering luxury vehicles at competitive prices with exceptional customer service.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <p class="col-lg-12">&#169; All Rights Reserved: Young Shabz Rentals 2025 / Developed by: fruitfulcode</p>
            </div>
        </div>
    </footer>
    <!--Footer-->

<?php 
include_once ("registerConnect.php");
?>
</body>
</html>