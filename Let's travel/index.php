<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Travel</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

<!-- Background Video & Header -->

    <div class="banner">
        <video src="./files/bgvid.mp4" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

    <div class="content" id="home"> 
        <nav>
            <img src="./files/logo.png" class="logo" alt="Logo" title="Let's Travel">
            
            <ul class="navbar">
                <li>
                    <a href="./index.php#home">Home</a>
                    <a href="./index.php#locations">Locations</a>
                    <a href="./index.php#package">Packages</a>
                    <a href="./about.php">About Us</a>
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
 
        <div class="title">
            <h1>Let's Travel</h1>
            <p>"India will teach us the tolerance and gentleness of mature mind,
                understanding spirit and a unifying, pacifying love for all human beings!"
            </p>
            <a href="./register.php" class="button">Book Now!</a>
        </div>
        </div>
    </div>

<!-- Services -->

<section class="container">
    <div class="text">
        <h2>We have the best services available for you!</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
           <img src="./files/1a.jpg" alt="Flight Services">
        </div>
            <h4>Flight Services</h4>
            <p>Arrival and Departure</p>
        </div>
    
        <div class="container-box">
        <div class="container-image">
           <img src="./files/2a.jpg" alt="Food Services">
        </div>
            <h4>Food Services</h4>
            <p>Catering</p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/3a.jpg" alt="Travel Services">
        </div>
            <h4>Travel Services</h4>
            <p>Pick-up/drop</p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./files/4a.jpg" alt="Hotel Services">
        </div>
            <h4>Hotel Services</h4>
            <p>Check-in/out</p>
        </div>

    </div>

</section>

<!-- Locations -->

<section class="locations" id="locations">
    <div class="package-title">
        <h2>Locations</h2>
    </div>

    <div class="location-content">
        
        <a href="./locations.php#Mumbai" target="_blank"><div class="col-content">
            <img src="./files/Maharashtra.jpg" alt="">
            <h5>Maharashtra</h5>
        </div></a>

       

        <a href="./locations.php#Jallianwala Bagh" target="_blank"><div class="col-content">
            <img src="./files/panjab.jpg" alt="">
            <h5>Punjab</h5>
        </div></a>

        <a href="./locations.php#Munnar" target="_blank"><div class="col-content">
            <img src="./files/kerala.jpg" alt="">
            <h5>Kerala</h5>
        </div></a>

        <a href="./locations.php#Jaisalmer" target="_blank"><div class="col-content">
            <img src="./files/Rajasthan.jpg" alt="">
            <h5>Rajasthan</h5>
        </div></a>

        <a href="./locations.php#Agra" target="_blank"><div class="col-content">
            <img src="./files/UP.jpg" alt="">
            <h5>Uttar Pradesh</h5>
        </div></a>

        <a href="./locations.php#Sundarbans National Park" target="_blank"><div class="col-content">
            <img src="./files/bengol.jpg" alt="">
            <h5>West Bengol</h5>
        </div></a>

        <a href="./locations.php#Statue Of Unity" target="_blank"><div class="col-content">
            <img src="./files/Gujrat.jpg" alt="">
            <h5>Gujarat</h5>
        </div></a>

        <a href="./locations.php#Hampi" target="_blank"><div class="col-content">
            <img src="./files/kernatak.jpg" alt="">
            <h5>Karnatak</h5>
            
        </div></a>

    </div>
</section>

<!-- Packages -->

<section class="package" id="package">
    <div class="package-title">
        <h2>Packages</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="./files/p1.jpg" alt="">
                <h3>Rs.9,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Bronze</h4>
                <ul class="pac-details">
                    <li>2 Star Hotel</li>
                    <li>5 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="./files/p2.jpg" alt="">
                <h3>Rs.19,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Silver</h4>
                <ul class="pac-details">
                    <li>3 Star Hotel</li>
                    <li>7 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./files/p3.jpg" alt="">
                <h3>Rs.29,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Gold</h4>
                <ul class="pac-details">
                    <li>4 Star Hotel</li>
                    <li>10 Nights Stay</li>
                    <li>Breakfast and Dinner</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./files/p4.jpg" alt="">
                <h3>Rs.39,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Platinum</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>14 Nights Stay</li>
                    <li>Breakfast, Lunch and Dinner</li>
                    <li>Bornfire</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

    </div>

</section>

<!-- Newsletter -->

<section class="newsletter">
    <div class="newstext">
        <h2>Newsletter</h2>
        <p>Subscribe to get offers and latest<br>updates every week!</p>
    </div>

    <div class="send">
        <form action="">
            <input type="email" name="emailid" placeholder="E-mail" required>
            <input type="submit" value="Subscribe">
        </form>
    </div>

</section>

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./register.php">Register</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    
                </div>
            </div>
            
        </div>
    </div>

   
</section>


 
</body>
</html>
