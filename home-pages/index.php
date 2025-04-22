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
                    <li class="nav-item"><a class="nav-link" href="#about-us">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cars">CARS</a></li>
                    <li class="nav-item"><a class="nav-link" href="../home-pages/login.php">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="../home-pages/register.php">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="mailto:oniyeabdullahi00@gmail.com">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--End of Navigation -->
    
    <!--Car Background-->
    <!-- Hero Section -->
    <section class="hero-section car-background mb-4">
        <div class="container">
            <div class="hero-content text-center text-white">
                <p class="lead">BOOK OUR LUXURY CARS AT COMPETITIVE PRICES</p>
                <h1 class="display-4 fw-bold mb-5">YOUNG SHABZ CAR RENTAL</h1>
                
                <div class="booking-form bg-white rounded p-4">
                    <form class="row g-3">
                        <div class="col-md-2">
                            <label class="form-label">PICK UP LOCATION</label>
                            <select class="form-select">
                                <option>SELECT LOCATION</option>
                                <option>PATIGI</option>
                                <option>OTHER LOCATION</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">PICK-UP DATE</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">DROP-OFF DATE</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">CAR TYPE</label>
                            <select class="form-select">
                                <option>JEEP</option>
                                <option>LUXURY</option>
                                <option>SPORT</option>
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button class="btn btn-primary w-100">FIND A CAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--End of Car Background-->

    

     <!-- Benefits Section (Improved from your version) -->
     <section class="benefits-section py-5 bg-light mt-4">
        <div class="container">
            <div class="text-center mb-5">
                <img src="../imgs/shabz logo.png" alt="Shabz Logo" width="80" loading="lazy" class="mb-3">
                <h6 class="text-uppercase text-primary">OUR BENEFITS</h6>
                <h2 class="display-5 fw-bold">Why Choose Shabz Rentals</h2>
            </div>
            
            <div class="row g-4">
                <!-- Benefit 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-bolt fa-2x text-primary"></i>
                            </div>
                            <h3 class="h5">Instant Booking</h3>
                            <p class="text-muted">Reserve your vehicle in just 60 seconds with our streamlined process.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary mt-3">
                                <i class="fas fa-forward-fast me-2"></i>VIEW ALL
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Benefit 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-map-marked-alt fa-2x text-primary"></i>
                            </div>
                            <h3 class="h5">Nationwide Locations</h3>
                            <p class="text-muted">Pick up your car at any of our 50+ locations across the country.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary mt-3">
                                <i class="fas fa-truck-pickup me-2"></i>VIEW ALL
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Benefit 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-medal fa-2x text-primary"></i>
                            </div>
                            <h3 class="h5">Premium Service</h3>
                            <p class="text-muted">98% customer satisfaction rate with 24/7 support.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary mt-3">
                                <i class="fas fa-star me-2"></i>VIEW ALL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--End of Our Benefits Section -->

<!-- About Section -->
<section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="../imgs/about-us.png" alt="About Shabz Rentals" class="img-fluid rounded" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <img src="../imgs/shabz logo.png" alt="Logo" width="80" loading="lazy" class="mb-3">
                    <h6 class="text-uppercase text-primary">GET TO KNOW US</h6>
                    <h2 class="display-6 fw-bold mb-4">Premium Car Rental Services</h2>
                    <p class="lead text-danger">Committed to providing exceptional service and value.</p>
                    <p>Young Shabz Rentals has been the industry leader in luxury car rentals since 2015, offering unparalleled service and the finest selection of vehicles.</p>
                    
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>Multiple convenient pickup locations</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>Competitive pricing with no hidden fees</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>24/7 customer support</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End of About US-->
<hr>

    <!-- Cars Section (Improved from your version) -->
    <section class="cars-section py-5 bg-light" id="cars">
        <div class="container">
            <div class="text-center mb-5">
                <img src="../imgs/shabz logo.png" alt="Shabz Logo" width="80" loading="lazy" class="mb-3">
                <h6 class="text-uppercase text-primary">OUR FLEET</h6>
                <h2 class="display-5 fw-bold">Premium Rental Vehicles</h2>
            </div>
            
            <div class="row g-4">
                <!-- Car 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card car-card h-100 border-0 overflow-hidden">
                        <img src="../imgs/car01.webp" class="card-img-top" alt="Hyundai Accent" loading="lazy">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-2">24 Reviews</span>
                            </div>
                            <h3 class="h5">Hyundai Accent Limited</h3>
                            <p class="text-primary fw-bold">$90.00 <span class="text-muted fw-normal">/ Day</span></p>
                            <hr>
                            
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <small><i class="fas fa-users text-muted me-1"></i> 5 Seats</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-cog text-muted me-1"></i> Automatic</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-door-open text-muted me-1"></i> 4 Doors</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-gas-pump text-muted me-1"></i> Petrol</small>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary w-100">
                                Book Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card car-card h-100 border-0 overflow-hidden">
                        <img src="../imgs/car02.webp" class="card-img-top" alt="Luxury Sedan" loading="lazy">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-2">18 Reviews</span>
                            </div>
                            <h3 class="h5">Mercedes-Benz E-Class</h3>
                            <p class="text-primary fw-bold">$150.00 <span class="text-muted fw-normal">/ Day</span></p>
                            <hr>
                            
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <small><i class="fas fa-users text-muted me-1"></i> 5 Seats</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-cog text-muted me-1"></i> Automatic</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-door-open text-muted me-1"></i> 4 Doors</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-gas-pump text-muted me-1"></i> Petrol</small>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary w-100">
                                Book Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card car-card h-100 border-0 overflow-hidden">
                        <img src="../imgs/car03.webp" class="card-img-top" alt="SUV Vehicle" loading="lazy">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="ms-2">32 Reviews</span>
                            </div>
                            <h3 class="h5">Toyota Land Cruiser</h3>
                            <p class="text-primary fw-bold">$120.00 <span class="text-muted fw-normal">/ Day</span></p>
                            <hr>
                            
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <small><i class="fas fa-users text-muted me-1"></i> 7 Seats</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-cog text-muted me-1"></i> Automatic</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-door-open text-muted me-1"></i> 5 Doors</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-gas-pump text-muted me-1"></i> Diesel</small>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary w-100">
                                Book Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card car-card h-100 border-0 overflow-hidden">
                        <img src="../imgs/car04.webp" class="card-img-top" alt="Sports Car" loading="lazy">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-2">29 Reviews</span>
                            </div>
                            <h3 class="h5">Porsche 911 Carrera</h3>
                            <p class="text-primary fw-bold">$250.00 <span class="text-muted fw-normal">/ Day</span></p>
                            <hr>
                            
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <small><i class="fas fa-users text-muted me-1"></i> 2 Seats</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-cog text-muted me-1"></i> Automatic</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-door-open text-muted me-1"></i> 2 Doors</small>
                                </div>
                                <div class="col-6">
                                    <small><i class="fas fa-gas-pump text-muted me-1"></i> Petrol</small>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary w-100">
                                Book Now <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of New Cars-->

<!--Fun Facts-->
<section class="stats-section bg-primary py-5 text-white mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <img src="../imgs/shabz logo.png" alt="Logo" width="80" loading="lazy" class="mb-3">
                    <h6 class="text-uppercase text-white">BY THE NUMBERS</h6>
                    <h2 class="display-5 fw-bold mb-4">Saving Time & Money With Our Services</h2>
                    <p class="lead">Join thousands of satisfied customers who have experienced our premium service.</p>
                </div>
                
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <i class="fas fa-car fa-3x mb-3 text-white"></i>
                                <h3 class="display-4 fw-bold mb-2">1,000+</h3>
                                <p class="mb-0">CARS RENTED</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <i class="fas fa-map-marker-alt fa-3x mb-3 text-white"></i>
                                <h3 class="display-4 fw-bold mb-2">50+</h3>
                                <p class="mb-0">LOCATIONS</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <i class="fas fa-smile fa-3x mb-3 text-white"></i>
                                <h3 class="display-4 fw-bold mb-2">98%</h3>
                                <p class="mb-0">SATISFIED CLIENTS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of Fun Facts-->


<!-- Categories Section -->
<section class="categories-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <img src="../imgs/shabz logo.png" alt="Shabz Logo" width="80" loading="lazy" class="mb-3">
                <h6 class="text-uppercase text-primary">VEHICLE TYPES</h6>
                <h2 class="display-5 fw-bold">Our Popular Car Categories</h2>
            </div>
            
            <div class="row g-4">
                <!-- Category 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-1.webp" alt="Sedan" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">Sedan</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-2.webp" alt="Sports" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">Sports</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-3.webp" alt="SUV" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">SUV</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-4.webp" alt="Luxury" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">Luxury</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Category 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-5.webp" alt="Convertible" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">Convertible</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Category 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card position-relative overflow-hidden rounded">
                        <img src="../imgs/popular-car-6.webp" alt="Electric" class="img-fluid w-100" loading="lazy">
                        <div class="category-overlay p-4">
                            <h3 class="text-black mb-1">Electric</h3>
                            <p class="text-black-80 mb-0">Available for rent</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of Car Categories -->

<!--Testimonials-->
    <!-- Testimonials Section -->
    <section class="testimonials-section py-5 bg-light" id="about-us">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <img src="../imgs/shabz logo.png" alt="Logo" width="80" loading="lazy" class="mb-3">
                    <h6 class="text-uppercase text-primary">TESTIMONIALS</h6>
                    <h2 class="display-5 fw-bold">What Our Clients Say</h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <p class="lead mb-0">Don't just take our word for it - hear from our satisfied customers about their experiences with Young Shabz Rentals.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="quote-icon mb-3 text-primary">
                                <i class="fas fa-quote-left fa-2x"></i>
                            </div>
                            <p class="mb-4">"The service was exceptional from start to finish. The car was clean, well-maintained, and exactly as described. Will definitely rent from Shabz again!"</p>
                            
                            <div class="rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <img src="../imgs/client-1.png" alt="Jessica" width="50" class="rounded-circle me-3" loading="lazy">
                                <div>
                                    <h5 class="mb-0">Jessica A.</h5>
                                    <small class="text-muted">Business Traveler</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="quote-icon mb-3 text-primary">
                                <i class="fas fa-quote-left fa-2x"></i>
                            </div>
                            <p class="mb-4">"I've rented from many companies, but Shabz stands out for their professionalism and attention to detail. The online booking was seamless and pickup was a breeze."</p>
                            
                            <div class="rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <img src="../imgs/client-2.png" alt="Michael" width="50" class="rounded-circle me-3" loading="lazy">
                                <div>
                                    <h5 class="mb-0">Michael T.</h5>
                                    <small class="text-muted">Frequent Renter</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="quote-icon mb-3 text-primary">
                                <i class="fas fa-quote-left fa-2x"></i>
                            </div>
                            <p class="mb-4">"The luxury vehicle I rented was impeccable. Customer service was available 24/7 and resolved my minor question immediately. Highly recommend!"</p>
                            
                            <div class="rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <img src="../imgs/client-3.png" alt="Sarah" width="50" class="rounded-circle me-3" loading="lazy">
                                <div>
                                    <h5 class="mb-0">Sarah K.</h5>
                                    <small class="text-muted">First-time Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of Testimonials-->

<!--Latest News and Articles-->
    <!-- Blog Section -->
    <section class="blog-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <img src="../imgs/shabz logo.png" alt="Shabz Logo" width="80" loading="lazy" class="mb-3">
                <h6 class="text-uppercase text-primary">LATEST NEWS</h6>
                <h2 class="display-5 fw-bold">From Our Blog</h2>
            </div>
            
            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100">
                        <div class="blog-image position-relative">
                            <img src="../imgs/news01.webp" class="card-img-top" alt="Car News" loading="lazy">
                            <div class="date-badge bg-primary text-white p-2">
                                <span>24</span>
                                <small>MAR</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../imgs/news-client.webp" alt="Author" width="40" class="rounded-circle me-2" loading="lazy">
                                <small class="text-muted">by Armson Tyler</small>
                            </div>
                            <h3 class="h5">The Fastest and Most Powerful Road Cars</h3>
                            <p class="card-text text-muted">Discover the engineering marvels that dominate today's roads with unparalleled performance.</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted"><i class="fas fa-comments me-1"></i> 12 Comments</small>
                                <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100">
                        <div class="blog-image position-relative">
                            <img src="../imgs/news02.webp" class="card-img-top" alt="Rental Tips" loading="lazy">
                            <div class="date-badge bg-primary text-white p-2">
                                <span>15</span>
                                <small>MAR</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../imgs/news-client.webp" alt="Author" width="40" class="rounded-circle me-2" loading="lazy">
                                <small class="text-muted">by Armson Tyler</small>
                            </div>
                            <h3 class="h5">Top 10 Tips for First-Time Car Renters</h3>
                            <p class="card-text text-muted">Essential advice to ensure a smooth rental experience for newcomers to car rentals.</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted"><i class="fas fa-comments me-1"></i> 8 Comments</small>
                                <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 h-100">
                        <div class="blog-image position-relative">
                            <img src="../imgs/news03.webp" class="card-img-top" alt="Electric Cars" loading="lazy">
                            <div class="date-badge bg-primary text-white p-2">
                                <span>05</span>
                                <small>MAR</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../imgs/news-client.webp" alt="Author" width="40" class="rounded-circle me-2" loading="lazy">
                                <small class="text-muted">by Armson Tyler</small>
                            </div>
                            <h3 class="h5">The Future of Electric Rental Vehicles</h3>
                            <p class="card-text text-muted">How electric cars are transforming the rental industry and what to expect in coming years.</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <small class="text-muted"><i class="fas fa-comments me-1"></i> 15 Comments</small>
                                <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of Latest News and Articles-->


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
</body>
</html>