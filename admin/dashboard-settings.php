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
    <style>
      .user-image img{
        width: 50%;
        height: 25vh;
        border-radius: 100%;
        background-color: blue;
        border: 2px solid black;
        margin-bottom: 20px;
}
    </style>
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
        <div class="main-content text-bg-light p-5 last">
            <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>
                <!--Settings Sections-->
                <div class="row">
                    <div class="col-md-4 bg-white p-5 rounded-4 border ml-4 mr-4">
                        <div class="text-center mb-4">
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
                            <h6>Profile Picture</h6>
                            <h4><?php echo $user["fullName"];?></h4>
                            <p>Admin</p>
                        </div>

                        <div>
                            <h5>Notifications</h5>
                            <hr>
                            <div class="d-flex space">
                                <h6>New Bookings</h6>
                                <div class="d-flex">
                                    <h6 class="bg-primary rounded-pill" style="width: 50px; height: 25px; position: relative; cursor: pointer;">
                                        <small class="bg-white rounded-circle" style="width: 20px; height: 20px; position: absolute; top: 2.5px; left: 5px;"></small>
                                    </h6>
                                </div>
                            </div>

                            <div class="d-flex space">
                                <h6>Cancellation</h6>
                                <div class="d-flex">
                                    <h6 class="text-bg-secondary rounded-pill" style="width: 50px; height: 25px; position: relative; cursor: pointer;">
                                        <small class="bg-white rounded-circle" style="width: 20px; height: 20px; position: absolute; top: 2.5px; left: 28px;"></small>
                                    </h6>
                                </div>
                            </div>

                            <div class="d-flex space">
                                <h6>Due Payment</h6>
                                <div class="d-flex">
                                    <h6 class="bg-primary rounded-pill" style="width: 50px; height: 25px; position: relative; cursor: pointer;">
                                        <small class="bg-white rounded-circle" style="width: 20px; height: 20px; position: absolute; top: 2.5px; left: 5px;"></small>
                                    </h6>
                                </div>
                            </div>

                            <div class="d-flex space">
                                <h6>Maintenance</h6>
                                <div class="d-flex">
                                    <h6 class="bg-secondary rounded-pill" style="width: 50px; height: 25px; position: relative; cursor: pointer;">
                                        <small class="bg-white rounded-circle" style="width: 20px; height: 20px; position: absolute; top: 2.5px; left: 28px;"></small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 bg-white p-5 rounded-4 border ml-4">
                        <div class="d-flex space">
                            <h4>Profile Information</h4>
                            <h4><button class="btn btn-outline-primary">Save</button></h4>
                        </div>

                        <div>
                            <button class="btn">Profile Settings</button>
                            <!--<button class="btn">Driver Settings</button>
                            <button class="btn">Payment Methods</button> -->
                        </div>
                        <hr>

                        <form action="">
                            <div class="mb-3">
                            <label for="">First Name</label><br>
                            <input type="text" class="form-control" name="" id="" placeholder="<?php echo $user["fullName"]; ?>"  readonly>
                            </div>

                            
                            <div>
                            <label for="">Email Address</label><br>
                            <input type="email" name="" class="form-control  mb-2" id="" placeholder="<?php echo $user["email"]; ?> " readonly>
                            </div>

                            <div>
                            <label for="">Phone Number</label><br>
                            <input type="tel" name="" class="form-control mb-2" id="" placeholder="<?php echo $user["phoneNumber"]; ?>" readonly>
                            </div>


                            <div>
                            <label for="">Password</label>
                            <input type="text" class="form-control" value="••••••••" readonly>
                            <small class="text-muted">Password is set (hidden for security)</small>
                            </div>
                        </form>


                    </div>
                </div>
                <!--End of Settings Section-->
        </div>
        <!--End of Last List-->
    </div>
</body>
</html>