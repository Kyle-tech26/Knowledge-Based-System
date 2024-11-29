<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echanted Luzon Getaways</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="try.css">
    <link rel="stylesheet" href="try.js">
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="homepage.php" class="navbar-brand">
                <img src="img/logoo.png" alt="Logo" class="navbar-logo"> <!-- Insert your logo file path here -->
                Enchanted Luzon Getaways
            </a>
            <div class="menu-icon" id="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="homepage.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown">Destinations</a>
                    <ul class="dropdown-menu">
                        <li><a href="citytours.php" class="dropdown-item">City Tours</a></li>
                        <li><a href="Populartour.php" class="dropdown-item">Popular Tours</a></li>
                        <li><a href="Adventuretour.php" class="dropdown-item">Adventure Tours</a></li>
                        <li><a href="beaches.php" class="dropdown-item">Beach Tours</a></li>
                        <li><a href="Alldestination.php" class="dropdown-item">All Destinations</a></li>
                    </ul>
                </li>
                <li><a href="index.php" class="nav-link">Sign out</a></li>   
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Best Tours in Luzon</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Discover the all Best Enchanted places in Luzon</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Baguio City">
                        <button type="buttonn" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                    <div class="bodyyy">

                        <div class="button-container animated slideInDown">
                            <a href="citytours.php">
                          <button class="pretty-button button1">City Tours</button></a>
                          <a href="Populartour.php">
                          <button class="pretty-button button2">Popular Tours</button></a>
                          <a href="Adventuretour.php">
                          <button class="pretty-button button3">Adventure Tours</button></a>
                          <a href="beaches.php">
                          <button class="pretty-button button4">Beach Tours</button></a>
                          <a href="Alldestination.php">
                          <button class="pretty-button button5">All Destinations</button></a>
                        </div>
                       </div>
                       <style>

/* Reset some browser default styles */
.hero-header {
    background: url('img/taalll.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}

.hero-header::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Green with 50% opacity */
    z-index: 1; /* Ensure it's above the background but below other content */
}

.hero-header > * {
    position: relative; /* Ensure that content inside the header appears above the overlay */
    z-index: 2;
}


.hero-headerr {
    background: url('img/windmill.jpeg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.aboutpic {
    position: relative;
    top: 110px;
}
.navbar-logo{
    width: 70px;
    position: relative;
    top: -10px;
    left: 20px;
}
.cute{
    cursor: pointer;
}
body {
    font-family: Arial, sans-serif;
}

/* Navbar styling */
.navbar {
    background-color: #86B817;
    padding: 10px 10px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    color: white;
    font-size: 24px;
    text-decoration: none;
}

/* Menu icon (hamburger icon) */
.menu-icon {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.menu-icon span {
    background-color: white;
    height: 3px;
    width: 25px;
    margin: 4px;
}

/* Navbar links */
.nav-links {
    display: flex;
    list-style: none;
    position: relative;
    top: 10px;
}

.nav-links li {
    position: relative;
}

.nav-links a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    transition: background 0.3s;
}

.nav-links a:hover {
    background-color: white;
    border-radius: 5px;
}

/* Dropdown menu */
.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #86B817;
    top: 100%;
    left: 0;
    list-style: none;
    padding: 10px 0;
}

.dropdown-menu li a {
    padding: 10px 20px;
    display: block;
}

.dropdown-menu li a:hover {
    background-color: #fdfdfd;
}

/* Responsive menu */
@media (max-width: 768px) {
    .menu-icon {
        display: flex;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        background-color: #333333;
        position: absolute;
        top: 60px;
        right: 20px;
        width: 200px;
    }

    .nav-links li {
        text-align: center;
    }

    .nav-links.show {
        display: flex;
    }
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
    position: relative;
    left: -10px;
}
.slideInDown {
    animation-name: slideInDown;
    position: relative;
    bottom: 150px;
    color: #555;
}
@keyframes slideInDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
.wow {
    visibility: hidden;
}
.fadeInUp {
    animation-name: fadeInUp;
    animation-duration: 1s;
    animation-fill-mode: both;
    visibility: visible;
}
@keyframes fadeInUp {
    from {
        transform: translate3d(0, 100%, 0);
        opacity: 0;
    }
    to {
        transform: translate3d(0, 0, 0);
        opacity: 1;
    }
}
.button{
    background-color: #86B817;
}

.design{
    position: relative;
    top: -90px;
    margin: 10px;
    color: white;
    background-color: #86B817;
    width: 150px;
    height: 40px;
    border-radius: 7px;
}
.h1{
    color: #86B817;
}
.design :hover{
    background-color: white;
}
.owl-carousel, .owl-carousel .owl-item {
    -webkit-tap-highlight-color: transparent;
    position: relative;
    cursor: pointer;
}
.owl-carousel {
    display: none;
    width: 80%;
    z-index: s;
}
.owl-carousel .owl-stage {
    position: relative;
}
.owl-carousel .owl-item {
    float: left;
    min-height: 1px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
}
.owl-dots {
    text-align: center;
}
.DESTINATIONS {
    position: relative;
    top: 120px;
}

footer {
    background-color: #282828;
    color: #ffffff;
    padding: 40px 0;
  }
  
  .footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .footer-section {
    flex: 1;
    padding: 0 20px;
  }
  
  .footer-section h2 {
    font-size: 18px;
    margin-bottom: 20px;
    color: #f4a261;
  }
  
  .footer-section p {
    line-height: 1.6;
  }
  
  .footer-section ul {
    list-style: none;
    padding: 0;
  }
  
  .footer-section ul li {
    margin-bottom: 10px;
  }
  
  .footer-section ul li a {
    text-decoration: none;
    color: #ffffff;
    transition: color 0.3s;
  }
  
  .footer-section ul li a:hover {
    color: #f4a261;
  }
  
  .footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #444444;
    padding-top: 20px;
  }
  
  .footer-bottom p {
    margin: 0;
    font-size: 14px;
  }
   .aboutluzon{
    position: relative;
    top: 20px;
   }
                        .bodyyy {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  position: relative;
  bottom: -50px;
}

@media (max-width: 768px) {
  .button-container {
    flex-direction: column; /* Stack buttons vertically */
    align-items: center; /* Center buttons horizontally */
  }
}

.button-container {
  display: flex; /* Use flexbox for horizontal layout */
  justify-content: center; /* Center buttons horizontally */
  gap: 20px; /* Space between buttons */
}

/* General button styles */
.pretty-button {
  border: none; /* No border */
  color: white; /* Text color */
  padding: 15px 0; /* Vertical padding */
  width: 200px; /* Fixed width for even sizes */
  font-size: 18px; /* Font size */
  border-radius: 25px; /* Rounded corners */
  cursor: pointer; /* Pointer cursor on hover */
  transition: all 0.3s ease; 
}

/* Button 1 */
.button1 {
  background-color: #86B817; 
}

.button1:hover {
  background-color: #699804; /* Darker shade on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
  
}

/* Button 2 */
.button2 {
  background-color: #86B817; /* Blue color */
}

.button2:hover {
  background-color: #699804; /* Darker blue on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
}

/* Button 3 */
.button3 {
  background-color: #86B817; /* Green color */
}

.button3:hover {
  background-color: #699804; /* Darker green on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
}

/* Button 4 */
.button4 {
  background-color: #86B817; /* Red color */
}

.button4:hover {
  background-color: #699804; /* Darker red on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */
}

/* Button 5 */
.button5 {
  background-color: #86B817; /* Purple color */
}

.button5:hover {
  background-color: #699804; /* Darker purple on hover */
  transform: translateY(-3px); /* Lift the button */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow */

}

.colorof{
    color: #86B817;
}
.coloroff{
    font-size: x-large;
    color: #86B817;
}
                       </style>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- About Start -->
    <div class="aboutpic">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="coloroff">About Us</h6>

                    <h1 class="mb-4">Welcome to <span class=" colorof">Enchanted Luzon Getaways</span></h1>
                    <p class="mb-4">Luzon, the largest and most populous island in the Philippines, is a treasure trove of diverse landscapes, rich cultural heritage, and unique experiences. From the bustling metropolis of Manila to the serene mountains of the Cordilleras, Luzon offers a variety of tourist destinations that appeal to travelers of all interests.</p>
                    <p class="mb-4">This knowledge-based system provides an in-depth exploration of Luzon's top tourist spots, offering valuable information on historical landmarks, natural wonders, and vibrant local communities. Whether you're looking for adventure, relaxation, or a cultural journey, Luzon promises a memorable and enriching experience.1</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <div class="cute"> <a href="citytours.php">
                            <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>City Tour</p>
                        </div></a>
                        <div class="col-sm-6"> <a href="Populartour.php">
                            <p class="mb-0"><i class="fa fa-arrow-right colorof"></i> Popular City</p>
                        </div></a>
                        <div class="col-sm-6"><a href="Adventureture.php">
                            <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>Adventure City</p>
                        </div></a>
                        <div class="col-sm-6"><a href="beaches.php">
                            <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>Beaches</p>
                        </div></a>
                        <div class="col-sm-6"><a href="Alldestination.php">
                            <p class="mb-0"><i class="fa fa-arrow-right colorof"></i>All Destinations</p>
                        </div></a>
                        
                    </div> </div>
                    <a href="about.php">
                    <button class="pretty-button button1" >Read More</button></a>
                           
                </div>       
            </div>
        </div>
    </div>

<!-- Navbar & Hero End -->


<!-- Destination Start -->

 <div class="anothercon">
<div class="container-fluid popular-destinations py-5">
    <div class="container py-5">
        <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
            <h5 class="section-title">Explore Destinations</h5>
            <h1 class="mb-0 colorof">Popular Tourist Spots</h1>
        </div>
            <div class="tab-content">
                <div id="tab-all" class="tab-pane fade show active">
                    <div class="row g-4">
                        <div class="col-lg-6 col-xl-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/mayonvolcano.jpg" alt="Destination Image">
                                <div class="destination-overlay">
                                    <a href="#" class="btn btn-primary">3 Photos</a>
                                    <h4 class="text-white mt-3">Albay, Bicol</h4>
                                    <a href="mayon.php" class="text-white">View <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="zoom-icon">
                                    <a href="img/mayonvolcano.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/taalnew.jpg" alt="Destination Image">
                                <div class="destination-overlay">
                                    <a href="#" class="btn btn-primary">3 Photos</a>
                                    <h4 class="text-white mt-3">San Nicolas, Batangas</h4>
                                    <a href="taal.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="zoom-icon">
                                    <a href="img/taal.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="destination-img">
                                <img class="img-fluid rounded w-100" src="img/callevigannn.jpg" alt="Destination Image">
                                <div class="destination-overlay">
                                    <a href="#" class="btn btn-primary">3 Photos</a>
                                    <h4 class="text-white mt-3">Vigan, Ilocos</h4>
                                    <a href="calle.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="zoom-icon">
                                    <a href="img/callevigannn.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional tabs for Europe, Asia, Africa... -->
            </div>
        </div>
    </div>
</div>
<style>
    /* Section Styles */
.popular-destinations {
    background-color: #f8f9fa;
}

.section-title {
    font-size: 1.5rem;
    font-weight: 500;
    color: #6c757d;
    text-transform: uppercase;
    letter-spacing: 1px;
}


.destination-img {
    position: relative;
    overflow: hidden;
}

.destination-img img {
    transition: transform 0.3s ease;
}

.destination-img:hover img {
    transform: scale(1.1);
}

.destination-overlay {
    position: absolute;
    bottom: 10%;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 20px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.destination-img:hover .destination-overlay {
    opacity: 1;
}

.destination-overlay h4 {
    font-size: 1.25rem;
}

.destination-overlay a {
    color: #ffffff;
    font-weight: 600;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 50px;
    padding: 5px 15px;
}

.zoom-icon {
    position: absolute;
    top: 10px;
    right: 10px;
}

.zoom-icon a {
    color: #007bff;
}

.zoom-icon i {
    font-size: 20px;
}
.anothercon{
    position: relative;
    top: 140px;
}

.anotherconn{
    position: relative;
    top: 100px;
}
.anotherconnn{
    position: relative;
    top: 10px;
}
.anotherconnnn{
    position: relative;
    top: -60px;
}

</style>

</div>
<!-- Destination End -->

<!-- Destination Start -->

<div class="anotherconn">
    <div class="container-fluid popular-destinations py-5">
        <div class="container py-5">
            <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
                <h5 class="section-title">Urban Destinations</h5>
                <h1 class="mb-0 colorof">City Tourist Spots</h1>
            </div>
        
                <div class="tab-content">
                    <div id="tab-all" class="tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/dino.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Clack, Pampanga</h4>
                                        <a href="dino.php" class="text-white">View <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/dino.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/skyranch11.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Tagaytay, Philippines</h4>
                                        <a href="skyranch.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/skyranch11.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/vigan2.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Batanes, Philippines</h4>
                                        <a href="museum.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/vigan2.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional tabs for Europe, Asia, Africa... -->
                </div>
            </div>
        </div>
    </div>


    <!-- Destination Start -->

 <div class="anotherconnn">
    <div class="container-fluid popular-destinations py-5">
        <div class="container py-5">
            <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
                <h5 class="section-title">Coastal Escapes</h5>
                <h1 class="mb-0 colorof">Beach Tourist Spots</h1>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-all" class="tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/mahaba1.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Little Boracay, Calatagan</h4>
                                        <a href="mahaba.php" class="text-white">View <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/mahaba1.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/patarr1.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Balinao, Philippines</h4>
                                        <a href="patar.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/patarr1.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/ampere11.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">Aurora, Philippines</h4>
                                        <a href="ampere.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/ampere11.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional tabs for Europe, Asia, Africa... -->
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Start -->

 <div class="anotherconnnn">
    <div class="container-fluid popular-destinations py-5">
        <div class="container py-5">
            <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
                <h5 class="section-title">Thrilling Expeditions</h5>
                <h1 class="mb-0 colorof">Adventure Tourist Spots</h1>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-all" class="tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/hopping1.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3"> Calatagan, Batangas</h4>
                                        <a href="hopping.php" class="text-white">View <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/hoppping1.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/kayak2.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">El Nido, Palawan, Philippines</h4>
                                        <a href="kayak.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/kayak2.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="img/surfing1.jpg" alt="Destination Image">
                                    <div class="destination-overlay">
                                        <a href="#" class="btn btn-primary">3 Photos</a>
                                        <h4 class="text-white mt-3">San Juan La Union, Philippines</h4>
                                        <a href="surfing.php" class="text-white">view <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="zoom-icon">
                                        <a href="img/surfing1.jpg" data-lightbox="destination"><i class="fa fa-search-plus btn btn-light"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional tabs for Europe, Asia, Africa... -->
                </div>
            </div>
        </div>
    </div>

<div class="footerdegg">
    <footer>
        <div class="footer-container">
          <div class="footer-section about-us">
            <h4>About Enchanted Luzon Getaways</h4>
            <p>We offer curated experiences and detailed guides to help you explore the hidden gems and popular tourist spots across Luzon. Our goal is to provide travelers with the best resources to enjoy their adventures.</p>
          </div>
          
          <div class="footer-section quick-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="homepage.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="citytours.php">City Tours</a></li>
              <li><a href="Adventuretour.php">Adventure Tours</a></li>
              <li><a href="Populartour.php">Popular Tours</a></li>
              <li><a href="beaches.php">Beach Tours</a></li>
            </ul>
          </div>
          
          <div class="footer-section contact-us">
            <h4>Contact Information</h4>
            <ul>
              <li><i class="fas fa-envelope"></i> info@enchantedluzon.com</li>
              <li><i class="fas fa-phone"></i> +63 912 345 6789</li>
              <li><i class="fas fa-map-marker-alt"></i> Manila, Philippines</li>
            </ul>
          </div>
          
          <div class="footer-section social-media">
            <h4>Follow Us</h4>
            <div class="social-icons">
              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
        
        <div class="footer-bottom">
          <p>&copy; 2024 Enchanted Luzon Getaways | All Rights Reserved</p>
        </div>
      </footer></div>
      <style>
        /* Footer styling */
.footerdegg{
  position: relative;
  top: 100px;
}

footer {
  background-color: #2b2b2b;
  color: #ffffff;
  padding: 40px 0;
  font-family: 'Arial', sans-serif;
  height:470px;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: flex-start;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  
}

.footer-section {
  flex: 1;
  min-width: 250px;
  margin: 20px;
}

.footer-section h4 {
  color: #f9a825;
  font-size: 18px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.footer-section p, 
.footer-section li, 
.footer-section a {
  font-size: 15px;
  color: #cccccc;
  line-height: 1.6;
}

.footer-section a {
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section a:hover {
  color: #f9a825;
}

/* About Us section */
.about-us p {
  max-width: 400px;
}

/* Quick Links section */
.quick-links ul {
  list-style: none;
  padding: 0;
}

.quick-links ul li {
  margin-bottom: 10px;
}

.quick-links ul li a {
  color: #ffffff;
  font-size: 15px;
  transition: color 0.3s ease;
}

.quick-links ul li a:hover {
  color: #f9a825;
}

/* Contact Information section */
.contact-us ul {
  list-style: none;
  padding: 0;
}

.contact-us ul li {
  margin-bottom: 10px;
  font-size: 15px;
}

.contact-us ul li i {
  margin-right: 8px;
  color: #f9a825;
}

/* Social Media Icons */
.social-icons {
  display: flex;
  gap: 15px;
  margin-top: 10px;
}

.social-icons a {
  color: #ffffff;
  font-size: 20px;
  border: 1px solid #ffffff;
  border-radius: 50%;
  padding: 10px;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  background-color: #f9a825;
  border-color: #f9a825;
}

/* Footer bottom */
.footer-bottom {
  margin-top: 30px;
  border-top: 1px solid #444;
  padding: 15px;
  text-align: center;
}

.footer-bottom p {
  margin: 0;
  font-size: 14px;
  color: #cccccc;
}

/* Responsive styling */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
  }

  .footer-section {
    margin-bottom: 30px;
  }
}

      </style>

<!-- Bootstrap JS & Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

   

</body>
</html>