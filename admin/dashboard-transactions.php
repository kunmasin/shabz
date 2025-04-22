<?php
include ("cookie.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUNG SHABZ RENTALS</title>
    <link rel="stylesheet" href="../home-pages/style.css">
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
    <div class="row">
        <!--Dashboard List-->
        <div class="col-md-2 dashboard bg-black p-2">
        <div class="list">
            <h4 class="p-3 text-white">SHABZ RENTALS</h4>
            <li class="p-2 m-2"><a href="../admin/dashboard.php"><i class="fa-solid fa-table mx-2"></i> Dashbaord</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-driver.php"><i class="fa-solid fa-id-card mx-2"></i> Drivers</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-bookings.php"><i class="fa-solid fa-book mx-2"></i> Bookings</a></li>
            <li class="p-2 m-2"><a href="../admin/dashboard-users.php"><i class="fa-solid fa-user-secret mx-2"></i> Users</a></li>
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
        <div class="col-md-10 text-bg-light p-3 last">
                <div class="d-flex space">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">
                          <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                        </div>
                      </nav>
                    <p class="mt-3"><button type="button" class="btn btn-primary">
                        Notifications <span class="badge text-bg-secondary">4</span>
                      </button>
                    </p>

                    <div class="d-flex space">
                    <div class="user-image">
         <?php 
                        $mysqli= new mysqli('localhost','root','','shaaba_car_rentals') or die($mysqli ->error);
                        $users= 'images';
                        //"SELECT  image FROM users WHERE s_N = {$user['s_N']}"
                        $result= $mysqli -> query("SELECT  images FROM registeration WHERE id = {$user['id']}") or die($mysqli -> error); //NOTE: to get particular user's image
                        if ($data = $result ->fetch_assoc()){
                            echo "<img src='{$data['images']}' width='100px'/>";
          }?>
          </div>
                        <p class="mt-4 mb-4"><?php echo $user['fullName'] ?></p>
                    </div>
                </div>


                <div class="bg-white focus-ring border rounded-4 p-3 mt-2 mb-2">
                    <div class="d-flex space">
                    <h6>Recent Bookings</h6>
                    <div class="d-flex space">
                        <h6 class="p-2"><i class="fa-solid fa-filter"></i> Filter</h6>
                        <h6 class="ml-4 p-2 text-white bg-primary"><i class="fa-solid fa-download"></i> Export</h6>
                    </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Pick-up & Drop-off</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-success">Successful</button></td>
                            
                          </tr>

                          <tr>
                            <td>02</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-danger">Failed</button></td>
                            
                          </tr>

                          <tr>
                            <td>03</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-danger">Failed</button></td>
                            
                          </tr>

                          <tr>
                            <td>04</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-success">Successful</button></td>
                            
                          </tr>

                          <tr>
                            <td>05</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-success">Successful</button></td>
                            
                          </tr>

                          <tr>
                            <td>06</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-danger">Failed</button></td>
                            
                          </tr>

                          <tr>
                            <td>07</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-danger">Failed</button></td>
                            
                          </tr>

                          <tr>
                            <td>08</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-warning">Pending</button></td>
                            
                          </tr>

                          <tr>
                            <td>09</td>
                            <td>#uwuiei3737</td>
                            <td>FAruq Muhammed</td>
                            <td>Kparumogi - Kusogi</td>
                            <td>2 April, 2025 8:20AM </td>
                            <td><button class="btn btn-outline-warning">Pending</button></td>
                            
                          </tr>
                        </tbody>
                      </table>

                      
        </div>
        <!--End of Last List-->
    </div>
</body>
</html>