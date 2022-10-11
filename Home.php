<!DOCTYPE html>
<html>
<head>
  <title>Clubs and Chapters</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<header>
<nav style="background-color: #192041; height: 100px; padding: 1.5rem 10rem;">
  <img class="default_logo" src="https://vitbhopal.ac.in/file/2020/01/logochhota.png" alt="logo" style="height:50px;max-height:72px;margin: 10px;">
  <div style="font-size : 17px;font-family:'Abyssinica SIL', serif;text-align: center;" class="menu">    
    <a  href="index2.php" style="padding:5px ;">Home</a>
    <a href="https://www.youtube.com/watch?v=C-KbCMvt86A"style="padding:5px ;" target="_blank">About</a>
    <a  href="event2.html"style="padding:5px ;">Events</a>
    <a href="logout.php"style="padding:5px ;">Logout</a>
    <a  href="clubs3.php"style="padding:5px ;">Clubs and Chapters</a>
  </div>
</nav>


<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){



?>

<div class="wel">
  <p style="color:white; font-size: 15px; margin: 10px;">Welcome - <?php echo $_SESSION['name']?></p>
 </div> 
 <?php } ?>



  <main>
    <section>
      <h3>Welcome To VIT Bhopal Clubs and Chapters</h3>
      <h1>DO COME & VISIT OUR CAMPUSES<span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
      <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiBj8Kq-Lz6AhUSBLcAHemxCCgQFnoECBQQAQ&url=https%3A%2F%2Fvitbhopal.ac.in%2F&usg=AOvVaw2u6TRd8Dr1UBilw0BB0R0h" class="btnone">learn more</a>
    </section>
  </main>

<!-- <section class="home" id="home">
  <div class="slider">
        <figure>
            <img src="./Clubs and Chapters.jpg" alt="">
            <img src="./events.jpg" alt="">
            <img src="./vitb3.jpg" alt="">
            <img src="./vitb.jpg" alt="">
        </figure>
    </div>

  </section>


</header>

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
 -->
</section>


<section class="gallery" id="gallery">

    <h1 class="heading" style="text-transform: capitalize;">Our Clubs<span> & Chapters</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/c1.jpg" alt="">
            <h3 class="title">Android Club</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c2.png" alt="">
            <h3 class="title">Data Science Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c3.jpg" alt="">
            <h3 class="title">Drama Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c4.png" alt="">
            <h3 class="title">Google Developer Students Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c5.png" alt="">
            <h3 class="title">AI Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c6.jpg" alt="">
            <h3 class="title">Music Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c7.png" alt="">
            <h3 class="title">Anchoring Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c8.png" alt="">
            <h3 class="title">Dance Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c9.jpg" alt="">
            <h3 class="title">Cyber Warriors Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c10.jpg" alt="">
            <h3 class="title">Photography Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c11.jpeg" alt="">
            <h3 class="title">Energy and environment protection club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c12.png" alt="">
            <h3 class="title">Insights Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c13.png" alt="">
            <h3 class="title">Coding Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c14.jpg" alt="">
            <h3 class="title">Mun Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c15.jpeg" alt="">
            <h3 class="title">Anterix Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c15.jpg" alt="">
            <h3 class="title">Seds Nebula</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c17.jpg" alt="">
            <h3 class="title">Geeks for Geeks</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c19.png">
            <h3 class="title">Telugu Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c18.jpg">
            <h3 class="title">VITB E-cell</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c20.png">
            <h3 class="title">Marathi Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <h3 class="title">Music Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c21.jpg">
            <h3 class="title">Sports Club</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c22.jpg">
            <h3 class="title">D2C Igniters</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/c23.jpg">
            <h3 class="title">Enactus</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>



    </div>

    <section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
 

    </section>

</section>



<section class="footer" style="background-color: #192041;">

    <div class="box-container">

        <div class="box">
            <h3 style="font-style: bold; font-size: 20px;">branches</h3>
            <a style="color: grey;"href="#"> <i class="fas fa-map-marker-alt"></i> Vellore </a>
            <a style="color: grey;"href="#"> <i class="fas fa-map-marker-alt"></i> Chennai </a>
            <a style="color: grey;"href="#"> <i class="fas fa-map-marker-alt"></i> Bhopal </a>
            <a style="color: grey;"href="#"> <i class="fas fa-map-marker-alt"></i> Andhra Pradesh </a>
        </div>

        <div class="box">
            <h3 style="font-style: bold; font-size: 20px;">quick links</h3>
            <a style="color: grey;"href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a style="color: grey;"href="#"> <i class="fas fa-arrow-right"></i> about </a>
            <a style="color: grey;"href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
        </div>

        <div class="box">
            <h3 style="font-style: bold; font-size: 20px;">contact info</h3>
            <a style="color: grey;"href="#"> <i class="fas fa-phone"></i> +91 9387625252 </a>
            <a style="color: grey;"href="#"> <i class="fas fa-phone"></i> +91 7845367289 </a>
            <a style="color: grey;"href="#"> <i class="fas fa-envelope"></i> dsw@vitbhopal.ac.in </a>
            <a style="color: grey;"href="#"> <i class="fas fa-envelope"></i> adsw@vitbhopal.ac.in </a>
            <a style="color: grey;"href="#"> <i class="fas fa-map-marker-alt"></i> Bhopal, india - 400104 </a>
        </div>

        <div class="box">
            <h3 style="font-style: bold; font-size: 20px;">follow us</h3>
            <a style="color: grey;"href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a style="color: grey;"href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a style="color: grey;"href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a style="color: grey;"href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>VITB</span> | all rights reserved </div>
    <center><img src = "bg.png" style="width:200px;height:75px;"></center> 

</section>

</body>
</html>