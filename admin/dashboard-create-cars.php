<?php
include ("cookie.php");

// **Define test_input() at the top**
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$car_name = $car_color = $car_status = $lease_price = $car_images = $target_file = "";
$uploadOk = 1;
$errors = []; // Array to store error messages

// **Database Connection (Place it here)**
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shaaba_car_rentals";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $car_name = test_input($_POST["car_name"]);
    $car_color = test_input($_POST["car_color"]);
    $car_status = test_input($_POST["car_status"]);
    $lease_price = test_input($_POST["lease_price"]);

    // Image Upload Handling
    if (isset($_FILES["car_images"]) && $_FILES["car_images"]["error"] == 0) {
        $target_dir = "car_images/";
        $image_name = time() . '_' . basename($_FILES["car_images"]["name"]);
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $maxFileSize = 5000000; // 5MB

        $check = getimagesize($_FILES["car_images"]["tmp_name"]);
        if ($check === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["car_images"]["size"] > $maxFileSize) {
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["car_images"]["tmp_name"], $target_file)) {
                $image = $target_file; // Store the file path
            } else {
                $errors[] = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $errors[] = "Please upload an image.";
    }

    // **Database Insertion using Prepared Statements (within this script)**
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO cars (car_name, car_color, car_status, lease_price, car_images) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $car_name, $car_color, $car_status, $lease_price, $target_file);

        if ($stmt->execute()) {
            echo "<script class='alert alert-success'>alert('Car added successfully!')</script>";
            // Optionally redirect: header("Location: drivers_list.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error adding car: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
    }
}

$conn->close();
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
    <script src="dashboard.js"></script>
</head>
<body>
    <div class="flex">
        <!--Dashboard List-->
        <div id="dashboard" class="dashboard bg-black p-2">
             <div class="list">
            <h4 class="p-3 text-white">SHABZ RENTALS</h4>
            <li class="p-2 m-2"><a href="../admin/dashboard.php"><i class="fa-solid fa-table mx-2"></i> Dashbaord</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-driver.php"><i class="fa-solid fa-id-card mx-2"></i> Drivers</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-car.php"><i class="fa-solid fa-id-card mx-2"></i> Cars</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-bookings.php"><i class="fa-solid fa-book mx-2"></i> Bookings</a></li>
           <!-- <li class="p-2 m-2"><a href="../admin/dashboard-users.php"><i class="fa-solid fa-user-secret mx-2"></i> Users</a></li> -->
           <li class="p-2 mt-2 ml-2"><a href="../admin/dashboard-settings.php"><i class="fa-solid fa-screwdriver-wrench mx-2"></i> Settings</a></li>
            <hr class="line">
            <li class="p-2 mt-2 ml-2"><a href="../admin/dashboard-payment-details.php"><i class="fa-solid fa-money-check-dollar mx-2"></i> Payments</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-transactions.php"><i class="fa-solid fa-cart-shopping mx-2"></i> Transactions</a></li>
            <li class="p-2 mt-1 ml-2"><a href="../admin/dashboard-car-report.php"><i class="fa-solid fa-file-invoice mx-2"></i> Car Report</a></li>
            <hr class="line">
            </div>

            <li class="logout p-2 mt-2 ml-2 border rounded-4 focus-ring text-center" style="background-color: rgb(99, 97, 96);"><a href="../admin/dashboard-logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i> Logout</a></li>
          </div>
        <!--End of Dashbaord List-->

    

          <!--Last List-->
<div class="text-bg-light p-2 last main-content">
                <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>

<div class="bg-white focus-ring border rounded-4 p-3 mt-2 mb-2" style="overflow: scroll;">
<h6 class="text-center">Create Cars</h6>    
    <form method="post" class="container" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="">
        <label for="">Car Name:</label><br>
        <input class="form-control" type="text" name="car_name" placeholder="Enter Car Name"><br>
    </div>

    <div>
        <label for="">Car Color:</label><br>
        <input class="form-control" type="text" name="car_color" placeholder="Enter Your Car Color"><br>
    </div>

    <div class="">
        <label for="">Click to Insert Car Image</label>
        <input type="file" class="form-control" name="car_images" placeholder="Upload Car Image"><br>
    </div>

    <div>
        <label for="">Car Status:</label><br>
        <input class="form-control" type="text" name="car_status" placeholder="Enter Car Status"><br>
    </div>

    <div>
        <label for="">Lease Price:</label><br>
        <input class="form-control" type="text" name="lease_price" placeholder="Enter Car Price"><br>
    </div>

    <button class="btn btn-primary mx-2">Add To Cars</button>
</form>
        </div>
        <!--End of Last List-->
    </div>
</body>
</html>
