<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>
    <header>
        <h1>Gallery</h1>
    </header>
    <nav>
        <div class="navbar">
            <img src="images/logo.png" alt="">
            <div class="hamburger" id="hamburger-menu" onclick="toggleMenu()">&#9776;</div>
            <div class="navbar-links" id="navbar-links">
                <span class="close-btn" onclick="closeMenu()">&times;</span>
                <ul>
                    <li><a href="home.php">Home</a></li>
                   
                    <li><a href="index.php">Academics</a></li>
             
                    
                    
                </ul>
            </div>
        </div>
    </nav>

    <section id="photos">
        <div class="container">
            <h2 class="welcome-message">Our Sweet Memories</h2>
            <div class="card">
                <h3 class="card-title">Photos</h3>
                <!-- 
                 <p class="card-description">We are a community-focused school dedicated to providing quality education
                    to all students. Our school offers a wide range of programs to cater to the diverse needs of our
                    students.</p>
                    -->
                <div class="gallery-img">
                    <img src="images/img1.jpg" alt="">
                    <img src="images/img2.jpg" alt="">
                    <img src="images/img3.jpg" alt="">
                    <img src="images/img4.jpg" alt="">
                  
                </div>
            </div>
        </div>
    </section>



    
    <section id="video">
        <div class="container">
            <h2 class="welcome-message">Our Sweet Memories</h2>
            <div class="card">
                <h3 class="card-title">Photos</h3>
                <!-- 
                 <p class="card-description">We are a community-focused school dedicated to providing quality education
                    to all students. Our school offers a wide range of programs to cater to the diverse needs of our
                    students.</p>
                    -->
                <div class="gallery-vid">
                    <video src="vid/Karwaan.mkv"></video>
                    <video src="sample.mp4"></video>
                    <video src="vid/sample.mp4"></video>
                    <video src="vid/sample.mp4"></video>
                    <video src="vid/sample.mp4"></video>
                    <video src="vid/sample.mp4"></video>
                </div>
            </div>
        </div>
    </section>

</body>

</html>