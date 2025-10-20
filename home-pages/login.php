<?php
// Start output buffering at the very beginning
ob_start();

// Process form data and database operations before any HTML
$usernames = $passwords = "";
$usernamesErr = $passwordErr = "";
$loginError = "";

// Only process form if it was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username/email
    if (empty($_POST["usernames"])) {
        $usernamesErr = "Username is required";
    } else {
        $usernames = test_input($_POST["usernames"]);
    }
    
    // Validate password
    if (empty($_POST["passwords"])) {
        $passwordErr = "Password is required";
    } else {
        $passwords = test_input($_POST["passwords"]);
    }
    
    // Only attempt login if validation passed
    if (empty($usernamesErr) && empty($passwordErr)) {
        include ("loginConnect.php");
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shaaba_car_rentals";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM `registeration` WHERE usernames = ? AND passwords = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $usernames, $passwords);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            setcookie('admin', $row["usernames"], time() + 3000, "/");
            header('Location: ../admin/dashboard.php');
            exit; // Important to stop script execution after redirect
        } else {
            $loginError = "Invalid Username or Password";
        }
        
        $stmt->close();
        $conn->close();
    }
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
                    <li class="nav-item"><a class="nav-link active" href="../home-pages/index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="../home-pages/about.php">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cars">CARS</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/login.php">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="../users/register.php">REGISTER</a></li>
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

    
    

<!--LogIn Details-->

<div class="m-5">
<div class="text-center">
<h1 class="font-weight-bold"> LOGIN PAGE </h1>
</div>

<form action="login.php "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="container" method="post">
    <div class="">
    <label for="">Username:</label><br>
    <input class="form-control" type="text" name="usernames" placeholder="Enter Your Username"><br>
    </div>

    <div>
    <label for="">Password</label><br>
    <input class="form-control" type="password" name="passwords" placeholder="Enter Your Password"><br>
    </div>

    <button class="btn btn-primary">LOGIN</button>
    <p class="mt-4">If you have not registered before kindly <a class="text-danger" href="../users/register.php">REGISTER</a></p>

    <span class="text-danger"><?php echo $usernamesErr; ?></span>
<span class="text-danger"><?php echo $passwordErr; ?></span>
<span class="text-danger"><?php echo $loginError; ?></span>

</form>

</div>
<!--End of LogIn Details-->

  <!-- CTA Section -->
  <section class="cta-section py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Experience Premium Car Rental?</h2>
            <p class="lead mb-5">Join thousands of satisfied customers who trust Young Shabz Rentals for their transportation needs.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="../users/register.php" class="btn btn-light btn-lg px-4">Register Now</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
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
                <p class="col-lg-12">&#169; All Rights Reserved: Young Shabz Rentals 2025 / Developed by: FARUQ MUHAMMED COMPUTER SCIENCE DEPARTMENT</p>
            </div>
        </div>
    </footer>
    <!--Footer-->
</body>
</html>