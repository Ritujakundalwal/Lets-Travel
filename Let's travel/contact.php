<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>

<body class="contactbody">
           <nav>
            <img src="./files/logo.png" class="logo" alt="Logo" title="Let's Travel">

            <ul class="navbar">
                <li>
                    <a href="./index.php">Home</a>
                    <a href="./index.php#locations">Locations</a>
                    <a href="./index.php#package">Packages</a>
                    <a href="./about.php">About Us</a>
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>

        <section class="contact">
            <div class="contact-form">
                <h1>Contact <span>Us</span></h1>
                <p>We are always out there to help you! Fill out the form given below and get a reply from us.</p>
            <form action="contact_form.php" method="post" >
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your E-mail" required>
                <!-- <input type="text" name="subject" placeholder="What brings you here?" required> -->
                <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Submit" class="submit-btn" name="button">
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