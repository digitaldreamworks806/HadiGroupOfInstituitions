<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Redirect to another PHP page
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Website</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
  
</head>

<body>

    <header>
        <h1>Welcome to Our School</h1>
    </header>

    <nav>
        <div class="navbar">
            <img src="images/logo.png" alt="">
            <div class="hamburger" id="hamburger-menu" onclick="toggleMenu()">&#9776;</div>
            <div class="navbar-links" id="navbar-links">
                <span class="close-btn" onclick="closeMenu()">&times;</span>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="index.php">Academics</a></li>
              
                    <li><a href="gallery.php">Gallery</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <div class="banner"><img src="images/banner.jpg" alt=""></div>
    <section id="home">
        <div class="container">
            <h2 class="welcome-message">Welcome to Our School Website!</h2>
            <div class="card">
                <h3 class="card-title">About Us</h3>
                <p class="card-description">We are a community-focused school dedicated to providing quality education
                    to all students. Our school offers a wide range of programs to cater to the diverse needs of our
                    students.</p>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="school-info">About Our School</h2>
            <div class="card">
                <h3 class="card-title">Mission</h3>
                <p class="card-description">Our mission is to foster an inclusive, collaborative, and innovative
                    learning environment for all students. We aim to prepare them for success both in academics and in
                    life.</p>
            </div>
            <div class="card">
                <h3 class="card-title">Vision</h3>
                <p class="card-description">We envision a school that is a leader in education and community engagement,
                    where every student is inspired to achieve their potential.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-info">
                <p><strong>Address:</strong> AL SAMI NAGAR, NAGPUR ROAD, YTL, ZIP</p>
                <p><strong>Email:</strong> mirzaatwar@gmail.com</p>
                <p><strong>Phone:</strong> (988) 173-4627</p>
                <p><strong>Phone:</strong> (928) 451-9177</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; Developed By Digital Dream Works</p>
    </footer>
    <script >function toggleMenu() {
    const menu = document.getElementById('navbar-links');
    menu.classList.add('active');
}

function closeMenu() {
    const menu = document.getElementById('navbar-links');
    menu.classList.remove('active');
}</script>

</body>

</html>