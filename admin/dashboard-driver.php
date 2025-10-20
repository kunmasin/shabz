<?php
include ("cookie.php");
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shaaba_car_rentals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, driver_name, driver_email, driver_address, date_joined, driver_number FROM drivers";
$result = $conn->query($sql);
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

         <!--Middle List List-->
         <div class="middle bg-white pt-3 main-content p-4">
          <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>
            <!--Container-->
            <div class="p-3 border rounded-4 focus-ring">
            <div class="d-flex space">
            <h3>All Drivers</h3>
            <button class="btn btn-primary"><a style='text-decoration:none; color:white' href="../admin/dashboard-create-drivers.php">Add New Driver</a></button>
            </div>
            <div class="d-flex space mt-2 mb-2">
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Driver No</th>
                            <th scope="col">Driver Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <!-- <th scope="col">Driver Image</th> -->
                            <th scope="col">Date Joined</th>
                          </tr>
                        </thead>
                        <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["driver_name"]. "</td>";
            echo "<td>" . $row["driver_email"]. "</td>";
            echo "<td>" . $row["driver_number"]. "</td>";
            echo "<td>" . $row["driver_address"]. "</td>";
           // echo "<td>";
//if (!empty($row["driver_images"])) {
  //  echo '<td><img src="' . htmlspecialchars($row["driver_images"]) . '" alt="Driver Image" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"></td>';
//} else {
  //  echo "No Image";
//}
//echo "</td>";

            echo "<td>" . $row["date_joined"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No users found</td></tr>";
    }
    ?>
</tbody>
                      </table>

            <hr>
            </div>
            <!--End of Conatainer-->
         </div>
         <!--End of Middle List-->
        <!--End of Last List-->
    </div>
</body>
</html>