<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaccine Services</title>
  <link rel="stylesheet" href="demo.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.png" type="image/ico">
  <style>
    h4 {
      text-align: center;
      font-weight: 900;
     

    a {

     text-align: center;
    }
    
a{
  color: black;
  /* font-family: 'Gilda Display', serif; */
  text-decoration: none;
  font-weight: 700;
  }
a:hover{

  color: red;
}

p{
  font-family: 'Gilda Display', serif

}


  </style>
</head>

<body>
  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <?php if(!isset($_SESSION['username'])) {?>
       <li><a href="../index.php">HOME</a></li>
       <?php  }
        else { ?>
        <li><a href="../home.php">HOME</a></li> <?php   } ?>
        <li><a href="../about.php">ABOUT</li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="../contactUs.php">CONTACT</a></li>
        <li><a href="../beneficiary_form.php">MAKE AN APPOINTMENT</a></li>

        <?php if(!isset($_SESSION['username'])) {?>
        <li><a href="../LoginPage.php">LOGIN</a></li>
        <li><a href="../Signup.html">SIGN UP</a></li>
    <?php  }
        else { ?>
        <li><a href="../profile.php">PROFILE</a></li>
        <li><a href="../logout.php">LOG OUT</a></li>
     <?php   } ?>

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

  <!----============================= Heading===============================================-->

  <div class="head">

    <h1> Welcome to VaccineDoor ! </h1><br>
    <h4> Choose from a variety of Vaccines in VaccineDoor</h4>

  </div>
  <br /><br>


<center> <img class="girl" src="head.jpg" /></center>



  <div class="container">
    <div class="boxes">

      <image class="gol" src="1.jpg " /><br>
      <h4>Children's Vaccine</h4><br>
      <p class="description" style="text-align: justify;">
        Students are often recommended and required to have vaccines for health sciences programs, dorm room living,
        study abroad programs, or just updating their childhood vaccines. We help students with all of their
        requirements for vaccines, and physicals.<br><br>

      <ul>
        <li><a href="hepatitisa.php">Hepatitis A Vaccine</a></li><BR>
        <li><a href="rabies.php">Rabies Vaccine</a></li><BR>
        <li><a href="hepatitisb.php">Hepatitis B Vaccine</a></li><BR>
      </ul>
      </p>
    </div>

    <div class="boxes">
      <image class="gol" src="2.jpg " />
      <h4>Adult Vaccine</h4><br>
      <p class="description" style="text-align: justify;">
        When teens get sick, those around them, including friends, babies, adults, and grandparents can get sick, too
        vaccine-preventable diseases are more serious for the very young. By getting vaccinated, you are protecting
        yourself as well as your family and friends.<br><br>
      <ul>
        <li><a href="tetanus.php">Tetanus, Diphtheria, Pertusis Vaccine</a></li><br>
        <li><a href="influenza.php">Influenza Vaccine</a></li><br>
        <li><a href="mmr.php"> MMR Vaccine</a></li><br>
      </ul>
      </p>
    </div>





    <div class="boxes">
      <image class="gol" src="3.jpg " />
      <h4>Old-Age Vaccine</h4><br>
      <p class="description" style="text-align: justify;">
        Older adults are at higher risk for hospitalization when they contract the virus, so if fewer older adults need
        hospitalization, more resources, including human ones, will be made available for other purposes and other
        populations.<br><br>
      <ul>
        <li><a href="pneumococcal.php">Pneumococcal Vaccine</a></li><br>
        <li><a href="varicella.php">Varicella Vaccine</a></li><br>
        <li><a href="meningitis.php">Meningitis Vaccine</a></li><br>
      </ul>
      </p>
    </div>
  </div>



  <!-- ======= Footer  ======= -->


  <footer>
    <div class="main-content">
      <div class="left box">

        <h2 style="font-size: 20px;font-family: Roboto, sans-serif;">VaccineDoor</h2>
        <div class="content">
          <p>A108 Adam Street <br>NY 535022, USA</p>
          <br>
          <p> <strong>Phone:</strong> +1 5589 55488 55 <br />
            <strong>Email:</strong> info@example.com
          </p>
        </div>
      </div>

      <div class="center box">
        <h2 style="font-size: 20px;font-family: Roboto, sans-serif;">Useful Links</h2>
        <div class="content">
          <div class="links">
            <a href="Home.html">Home</a> <br />
            <a href="about.html">About Us</a> <br />
            <a href="Vaccine Pages/Service.html">Services</a> <br />
            <a href="Contactus.html">Contact Us</a><br />
            <a href="Beneficiary_form.html">Book a Vaccine</a><br />
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