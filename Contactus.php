<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
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
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</li>
        <li><a href="Vaccine Pages/Service.php">SERVICES</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="Beneficiary_form.php">MAKE AN APPOINTMENT</a></li>
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



 <!----==========Contact Us========================-->

 <div class="contact">
  <div style="text-align:center"><br>

<br><br><br>

      <h1 style="text-align: center;">CONTACT US</h1> <br>
      
    <p>Visit us gladly or leave us a message!</p>
    <br>
    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=swargate%20pune+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
        href="https://www.maps.ie/route-planner.htm"></a></div>
  </div>


  <div class="row">
    <div class="column">
      <br>


      <!-- <img src="asset/img/add.png " style="height: 50px; margin: 40px;    width: 50px;"> -->
      <h3 style="align-items: center; margin: 40px;color: green;">Our Address</h3>
      <p style="margin: 40px;">Vaccine Door,289/2, Timber Market Rd, Ekbote Colony, Mahatma Phule Peth, Swargate.
Pune, Maharashtra 411042 </p>

      <h3 style="align-items: center; margin: 40px;color: green;">Contact Us</h3>
      <p style="margin: 40px;">vaccinedoor20@gmail.com <br> +91 5589 55488 55</p>


    </div>
    <div class="column">
      <form action="#">
        <label for="fname"> </label>
        <input type="text" id="fname" name="fname" placeholder="Your First name">
        <label for="lname"></label>
        <input type="text" id="lname" name="lname" placeholder="Your Last name">
        <!-- <label for="country">Country</label>F -->


        <!--        
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select> -->

        <label for="subject"></label>
        <textarea id="subject" name="subject" placeholder="Subject" style="height:160px"></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<!----==========Contact Us========================-->

  <!----==========Belt========================-->

  <div class="belt">
    <h4>
      <br />In an emergency? Need help now?
      <p class="description">
        If you need any type vaccine in an emergency you can sign up, login and make an appointment throgh this. In minimum time you can get vaccine that you want.
      </p>
      <button class="belt-btn">
        <strong>
          <a href="beneficiary_form.html">Make an Appointment</a>
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