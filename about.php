<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="index2.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<link rel="icon" href="asset/img/favicon.png" type="image/ico">
</head>

<body>
  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <?php if(!isset($_SESSION['username'])) {?>
       <li><a href="index.php">HOME</a></li>
       <?php  }
        else { ?>
        <li><a href="home.php">HOME</a></li> <?php   } ?>
        <li><a href="about.php">ABOUT</li>
        <li><a href="Vaccine Pages/Service.php">SERVICES</a></li>
        <li><a href="contactUs.php">CONTACT</a></li>
        <li><a href="beneficiary_form.php">MAKE AN APPOINTMENT</a></li>

       <?php if(!isset($_SESSION['username'])) {?>
        <li><a href="LoginPage.php">LOGIN</a></li>
        <li><a href="Signup.html">SIGN UP</a></li>
    <?php  }
        else { ?>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="logout.php">LOG OUT</a></li>
     <?php   } ?>
     
      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

  <!----==========About Us========================-->
  <div class="preabout">
    <a href="about">
      <h1> ABOUT US</h1>
    </a>
    <p> VaccineDooor is a preventative health and wellness company that is
      supervised by Board Certified Doctors. We offer same day and next day
      appointments<br> and allow you to book your appointments online! We
      specialize in travel medicine, student health, employee health, drug
      testing, STD testing, <br>physical exams, immigration exams,<br> and laboratory
      services.
    </p>
  </div>

  <div class="about">
    <div class="box">
      <img src="asset/img/about.jpg">

    </div>
    <div class="box">
      <h3 style="font-family: 'Gilda Display', serif;"><strong>We offer same day and next day
          appointments and allow you to book your appointments online!</strong></h3>
      <br><br>


      <li>Prescriptions for medications including Anti-Malarial, Traveler's Diarrhea, Acute Mountain Sickness
        Prevention, etc. as indicated.</li><br>

      <li>Up to date health information for your travel needs, including insect precautions and insect repellents, blood
        clot prevention for long air flights, water and food precautions, current outbreaks and health and safety
        concerns for areas of travel.</li><br>

      <li>We are committed to providing the safest and highest quality care to our patients and clients. We are proud of
        the highly qualified and dedicated professional staff at VaccineDoor for their commitment to providing a
        positive
        and comfortable clinic for our patients. We strive every day to ensure that all of our patients are satisfied
        and well taken care of. We look forward to serving you!</p>
      </li>
    </div>

  </div>

  <!----==========End of About Us========================-->


  <!----==========Belt========================-->

  <div class="belt">
    <h4>
      <br />In an emergency? Need help now?
      <p class="description">
        If you need any type vaccine in an emergency you can sign up, login and make an appointment throgh this. In minimum time you can get vaccine that you want.
      </p>
      <button class="belt-btn">
        <strong>
          <a href="beneficiary_form.php">Make an Appointment</a>
        </strong></button>

      <br /><br />
    </h4>
  </div>
  <!----==========End of Belt========================-->





<!-- ======= Footer  ======= -->
<footer>
  <div class="main-content">
    <div class="left box">
    
      <h2 style="font-size: 20px;font-family: Roboto, sans-serif;">VaccineDoor</h2>
      <div class="content">
        <p>289/2, Timber Market Rd, Ekbote Colony, Mahatma Phule Peth, Swargate. <br>Pune, Maharashtra 411042 </p>
        <br>
        <p> <strong>Phone:</strong> 1800-0000-1111<br />
          <strong>Email:</strong> vaccinedoor20@gmail.com
        </p>
      </div>
    </div>

    <div class="center box">
      <h2 style="font-size: 20px;font-family: Roboto, sans-serif;">Useful Links</h2>
      <div class="content">
        <div class="links">
          <a href="#home">Home</a> <br />
          <a href="#about">About Us</a> <br />
          <a href="#search">Services</a> <br />
          <a href="#search">How it Works</a><br />
          <a href="#search">Contact Us</a><br />
        </div>
      </div>
    </div>

    <div class="right box">
      <h2 style="font-size: 20px;font-family: Roboto, sans-serif;">Our Newsletter</h2>
      
      <div class="content">
        <form action="#">
          <p>Subscribe to our e-mail newsletter today receive updates on
            latest news vaccines as other special offers!!</p>
          <div class="email">
            <input type="email" required />
          </div>
          <!-- <div class="msg">
        <div class="text">Message *</div>
        <textarea rows="2" cols="25" required></textarea>
      </div> -->
          <div class="btn">
            <button type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="bottom">
    <center> 2021 &copy VaccineDoor All rights reserved. </center>
  </div>
</footer>


<!-- ======= End of Footer ======= -->

</body>

</html>




