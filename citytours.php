<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Tours</title>
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
                        <li><a href="beaches.php" class="dropdown-item">Beaches</a></li>
                        <li><a href="Alldestination.php" class="dropdown-item">All Destinations</a></li>
                    </ul>
                </li>
                <li><a href="logout.php" class="nav-link">Sign out</a></li>
            </ul>
        </div>
    </nav>


        <div class="container-fluid bg-primary py-5 mb-5 hero-headerrr">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">City Tours</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">City Tours</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

.breadcrumb{
    position: relative;
    left: -10px;
    top: -120px;
}

.hero-headerrr {
    background: url('img/12345.jpg') center center no-repeat;
    background-size: cover;
    height: 70vh;
    position: relative;
    top: 90px;
}

.hero-headerrr::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Green with 50% opacity */
    z-index: 1; /* Ensure it's above the background but below other content */
}

.hero-headerrr > * {
    position: relative; /* Ensure that content inside the header appears above the overlay */
    z-index: 2;
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
        .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.tourist-spot {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 300px;
    text-align: center;
    position: relative;
}

.tourist-spot img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.tourist-spot h3 {
    margin: 10px;
    color: #007BFF;
}

.tourist-spot p {
    padding: 0 10px;
    color: #555;
}

.tourist-spot .location {
    font-size: 0.9em;
    color: #888;
    margin-bottom: 10px;
}

.tourist-spot:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
}
.he {
    text-align: center;
    color: #007BFF;
    font-size: xx-large;
    font-weight: 600;
    justify-content: center;
    text-align: center;
    margin-left: 570px;
    padding: 5px;
    position: relative;
    top: 100px;
    left: -250px;
}

.CONTAINER{
    position: relative;
    top: 120px;
}

    </style>



                  <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="he">Explore City Tourist Spots</div>
    <div class="CONTAINER">
    <div class="container">

     <!-- Tourist Spot 1 -->
     <div class="tourist-spot" onclick="window.location.href='basco.php'">
        <img src="img/basco1.jpg" alt="Tourist Spot 1">
        <div class="cute"><strong> Lighthouse</strong></div>
        <p>Discover the beauty of this historical landmark.</p>
        <p class="location">📍 Location: Batanes, Philippines</p>
    </div>

    <!-- Tourist Spot 2 -->
    <div class="tourist-spot" onclick="window.location.href='baguio.php'">
        <img src="img/Baguio.jpeg" alt="Tourist Spot 2">
        <div class="cute"><strong> Shared Strawberry Picking</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Baguio, Philippines</p>
    </div>
    <!-- Tourist Spot 3 -->
    <div class="tourist-spot" onclick="window.location.href='skyranch.php'">
        <img src="img/skyranch1.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Sky Ranch</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Pampanga, Philippines</p>
    </div>
    <!-- Tourist Spot 4 -->
    <div class="tourist-spot" onclick="window.location.href='dino.php'">
        <img src="img/dino.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Dinosaurs Island</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Clark Freeport, Pampanga, Philippines</p>
    </div>
    <!-- Tourist Spot 5 -->
    <div class="tourist-spot" onclick="window.location.href='museum.php'">
        <img src="img/vigan1.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Ilocos Sur Museum</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Vigan City Ilocos Sur, Philippines</p>
    </div>
    <!-- Tourist Spot 6 -->
    <div class="tourist-spot" onclick="window.location.href='hitorical.php'">
        <img src="img/intramuro.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Intramuros</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Manila, Philippines</p>
    </div>
    <!-- Tourist Spot 7 -->
    <div class="tourist-spot" onclick="window.location.href='mop.php'">
        <img src="img/mop.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Manila Ocean Park</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Coron, Palawan, Philippines</p>
    </div>
    <!-- Tourist Spot 8 -->
    <div class="tourist-spot" onclick="window.location.href='binondo.php'">
        <img src="img/binondo2.jpg" alt="Tourist Spot 2">
        <div class="cute"><strong>Binondo China Town</strong></div>
        <p>Experience stunning landscapes and vibrant culture.</p>
        <p class="location">📍 Location: Binondo, Philippines</p>
    </div>

    <!-- Add more tourist spots as needed -->

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
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">City Tours</a></li>
              <li><a href="#">Adventure Tours</a></li>
              <li><a href="#">Popular Tours</a></li>
              <li><a href="#">Beach Tours</a></li>
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
  top: 170px;
}

footer {
  background-color: #2b2b2b;
  color: #ffffff;
  padding: 40px 0;
  font-family: 'Arial', sans-serif;
  height:450px;
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


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/waypoints/waypoints.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/tempusdominus/js/moment.min.js"></script>
 <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>

</html>