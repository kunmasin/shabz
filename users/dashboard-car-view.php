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
                <div class="bg-white d-flex space focus-ring border rounded-4 p-3 mt-2 mb-2">
                    <h6>Car Information</h6> 
                    <h6>Click the buttons below, to check car details</h6>                  
                </div>
                <div class="btn-group mb-3 space d-flex" role="group">
                  <button class="btn btn-dark" onclick="showCar('lambogini')">Lambogini</button>
                  <button class="btn btn-dark" onclick="showCar('ferrari')">Ferrari</button>
                  <button class="btn btn-dark" onclick="showCar('bugatti')">Bugatti</button>
                  <button class="btn btn-dark" onclick="showCar('toyota')">Toyota</button>
                  <button class="btn btn-dark" onclick="showCar('bmw')">BMW</button>
                  <button class="btn btn-dark" onclick="showCar('bentley')">Bentley</button>
                  <button class="btn btn-dark" onclick="showCar('porsche')">Porsche</button>
                  <button class="btn btn-dark" onclick="showCar('honda')">Honda</button>
                  <button class="btn btn-dark" onclick="showCar('benz')">Benz</button>
                </div>



                <div id="lambogini" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/yellow-lambo.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-lambogini.avif" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/lambogini-urus.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>


                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/black-lambogini.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/ash-lambogini.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/red-lambogini.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>

                </div>


                <div id="bugatti" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/yellow-buggati.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-bugatti.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-bugatti.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>
                  </div>


                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/black-white-bugatti.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/golden-bugatti.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/red-bugatti.jpg" class="img-fluid me-3" alt="Bugatti">
                    <h5></h5>
                  </div>
                  </div>
                </div>

                <div id="toyota" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/toyota-venza.jpg" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-toyota.jpg" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/toyota-white.jpg" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>
                  </div>


                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/toyota-lexus.png" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/blue-toyota.jpg" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/packoftoyota.jpeg" class="img-fluid me-3" alt="Toyota">
                    <h5></h5>
                    <p></p>
                  </div>
                  </div>

                </div>

                <div id="bmw" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/black-bmw.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-bmw.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/bmw-tree.jpeg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/red-bmw.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/blue-bmw.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/bigwhitebmw.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                    <p></p>
                  </div>
                  </div>
                </div>


                <div id="bentley" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/yellow-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/list-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/blue-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/black-long-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/shiny-white-bentley.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                </div>
                </div>


                <div id="ferrari" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/ferrari-ash.avif" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-ferrari.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/yellow-ferrari.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/list-of-ferrari.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/blue-ferrari.webp" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/red-ferrari.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>
                </div>


                <div id="porsche" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/red-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/ash-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/blue-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/shiny-black-porsche.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>
                </div>

                <div id="honda" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/ash-honda.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-honda.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/list-honda.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/ash-shiny-honda.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-honda-acura.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-honda.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>
                </div>


                <div id="benz" class="car-info" style="display:none;">
                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/benz-tinted.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/black-benz.jpeg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/white-benz-g-wagon.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-lg-4">
                    <img src="cars/blue-benz.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/benz-bus.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>

                  <div class="col-lg-4">
                    <img src="cars/red-benz.jpg" class="img-fluid me-3" alt="">
                    <h5></h5>
                  </div>
                  </div>
                </div>

          </div>
        </div>
        <!--End of Last List-->
    </div>

    <script>
      function showCar(carId) {
          // Hide all car info sections
          const carSections = document.querySelectorAll('.car-info');
        carSections.forEach(section => section.style.display = 'none');

          // Show the selected one
          const selectedCar = document.getElementById(carId);
          if (selectedCar) {
              selectedCar.style.display = 'block';
          }
      }
</script>

</body>
</html>