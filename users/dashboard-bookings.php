<?php
include ("cookie.php");

// **Define test_input() at the top**
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$user_name = $car_destination = $car_color = $car_name = $starting_date = $ending_date = $nin = $target_file = "";
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
    $user_name = test_input($_POST["user_name"]);
    $car_destination = test_input($_POST["car_destination"]);
    $car_color = test_input($_POST["car_color"]);
    $car_name = test_input($_POST["car_name"]);
    $starting_date = test_input($_POST["starting_date"]);
    $ending_date = test_input($_POST["ending_date"]);


    // Image Upload Handling
    if (isset($_FILES["nin"]) && $_FILES["nin"]["error"] == 0) {
        $target_dir = "nin/";
        $image_name = time() . '_' . basename($_FILES["nin"]["name"]);
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $maxFileSize = 5000000; // 5MB

        $check = getimagesize($_FILES["nin"]["tmp_name"]);
        if ($check === false) {
            $errors[] = "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["nin"]["size"] > $maxFileSize) {
            $errors[] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["nin"]["tmp_name"], $target_file)) {
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
        $stmt = $conn->prepare("INSERT INTO   `bookings` (user_name, car_destination, car_name, car_color, starting_date, ending_date, nin) VALUES ('$user_name', '$car_destination', '$car_name', '$car_color', '$starting_date', '$ending_date', '$target_file')");
        #$stmt->bind_param($user_name, $car_destination, $car_name, $car_color, $starting_date, $ending_date, $target_file);

        if ($stmt->execute()) {
            echo "<script class='alert alert-success'> alert('Car Booked Successfully!')</script>";
            // Optionally redirect: header("Location: drivers_list.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error booking car: " . $stmt->error . "</div>";
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
    <div class="">
        <!--Dashboard List-->
        <div id="dashboard" class="col-md-2 dashboard bg-black p-2">
            <div class="list">
            <h4 class="p-2 text-white">SHABZ RENTALS</h4>
            <li class="p-2 m-2"><a href="../users/dashboard.php"><i class="fa-solid fa-table mx-2"></i> Dashbaord</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-driver.php"><i class="fa-solid fa-id-card mx-2"></i> Cars</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-bookings.php"><i class="fa-solid fa-book mx-2"></i> Book a Car</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-booking-list.php"><i class="fa-solid fa-user-secret mx-2"></i> Recent Bookings</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-settings.php"><i class="fa-solid fa-screwdriver-wrench mx-2"></i> Settings</a></li>
            <hr class="line">
            <li class="p-2  m-2"><a href="../users/dashboard-payment-details.php"><i class="fa-solid fa-money-check-dollar mx-2"></i> Payments</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-transactions.php"><i class="fa-solid fa-cart-shopping mx-2"></i> Transactions</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-car-view.php"><i class="fa-solid fa-file-invoice mx-2"></i>View Car</a></li>
            <hr class="line">
            </div>

            <li class="logout p-2 m-2  border rounded-4 focus-ring text-center" style="background-color: rgb(99, 97, 96);"><a href="../users/dashboard-logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i> Logout</a></li>
        </div>
        <!--End of Dashbaord List-->


    

          <!--Last List-->
        <div class="col-md-10 text-bg-light p-4 last main-content">
                <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>
                <div class="bg-white focus-ring border rounded-4 p-3 mt-2 mb-2" style="overflow: scroll;">
                    <div class="d-flex space">
                    <h6>Book a car</h6>
                    </div>

                    <form class="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-group">
                          <label>Enter Your Name</label><br>
                          <input type="text" class="form-control" placehlder="Enter Your Full Name" name="user_name">
                      </div>

                      <div class="form-group">
                          <label>Enter Your Destination</label><br>
                          <input type="text" class="form-control" placehlder="Enter Your Destination" name="car_destination">
                      </div>


                      <div class="form-group">
                          <label>Upload Your National ID Card</label><br>
                          <input type="file" class="form-control" placehlder="Upload Your National ID Card" name="nin">
                      </div>

                      <div class="form-group">
                          <label>Select a Car</label><br>
                          <select class="form-control" name="car_name">
                          <option value="Lambogini" disabled>Select a car</option>
                            <option value="Lambogini">Lambogini</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Buggatti">Buggatti</option>
                            <option value="Toyota">Totota</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Honda">Honda</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Audi">Audi</option>
                            <option value="Inoson">Inoson</option>
                            <option value="Massarati">Massarati</option>
                            <option value="BENZ">BENZ</option>
                            <option value="BMW">BMW</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label>Select the Car Color</label><br>
                          <select class="form-control" name="car_color">
                          <option value="Select Car Color" disabled>Select Car Color</option>
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Red">Red</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Gold">Gold</option>
                            <option value="Blue">Blue</option>
                            <option value="Green">Green</option>
                            <option value="Gray">Gray</option>
                            <option value="Ash">Ash</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label>Enter Your Date of Booking</label><br>
                          <input type="date" class="form-control" name="starting_date" placehlder="Enter Your Date of Booking">
                      </div>

                      <div class="form-group">
                          <label>Enter Your Date of Return</label><br>
                          <input type="date" class="form-control" name="ending_date" placehlder="Enter Your Date of Return">
                      </div>

                      <div class="form-group">
                          <input type="submit" class="form-control bg-primary text-white" value="Upload Reciept">
                      </div>
                  </form>
  </div>
        <!--End of Last List-->
    </div>
</body>
</html>