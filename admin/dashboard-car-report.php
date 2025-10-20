<?php
include ("cookie.php");
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
        <div id="dashboard" class="col-md-2 dashboard bg-black p-2">
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
        <div class="text-bg-light p-3 last main-content">
                  <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>
                <div class="bg-white focus-ring border rounded-4 p-3 mt-2 mb-2">
                    <h6>Car Information</h6>
                   <div class="d-flex space">
                    <div class="d-flex">
                    <img src="../imgs/audi.webp" style="width: 12%; height: 100%;" class="rounded-5 mr-3  image-fluid" alt="">
                    <div class="">
                        <span >657883</span>
                        <h5>Toyota Corolla</h5>
                        <span>Driver: Faruq Muhammed</span>
                    </div>    
                </div>
                </div>

                    <table class="table table-hover mt-2">
                        <thead>
                          <tr>
                            <th scope="col">Driver</th>
                            <th scope="col">Car No</th>
                            <th scope="col">Status</th>
                            <th scope="col">Last Maintenance</th>
                            <th scope="col">Number Plate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row" class="d-flex space">
                                <img src="../imgs/client-3.png" alt="">
                                <div>
                                    <h6>Faruq Muhammed</h6>
                                    <span>ID: GFRT34</span>
                                </div>
                            </th>
                            <td>654</td>
                            <td><button class="btn btn-outline-success">Available</button></td>
                            <td>1st of April, 2025</td>
                            <td>KWS-1346995</td>
                          </tr>
                        </tbody>
                      </table>

                      
                     
                </div>

                <!--Side by side details-->
                    <div class="bg-white mr-2 col-md-12 focus-ring border rounded-4 p-3">
                        <h6>Trip History</h6>

                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Trip Details</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">01</th>
                                <td><div>
                                    <span>#Nissan</span>
                                    <span>San Diego - Dallas</span>
                                </td>
                                <td><button class="btn btn-outline-info">Completed</button></td>
                              </tr>

                              <tr>
                                <th scope="row">02</th>
                                <td><div>
                                    <span>#Nissan</span>
                                    <span>San Diego - Dallas</span>
                                </td>
                                <td><button class="btn btn-outline-danger">Cancelled</button></td>
                              </tr>

                              <tr>
                                <th scope="row">03</th>
                                <td><div>
                                    <span>#Nissan</span>
                                    <span>San Diego - Dallas</span>
                                </td>
                                <td><button class="btn btn-outline-info">Completed</button></td>
                              </tr>
                            </tbody>
                          </table>

                    </div>

                    </div>
                <!--End of Side by side details-->

        </div>
        <!--End of Last List-->
    </div>
</body>
</html>