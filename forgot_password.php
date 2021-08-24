<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "dbconnect.php";
     
    $emailId = $_POST['email'];
 
    $result = pg_query($conn,"SELECT fname,lname,password FROM beneficiary WHERE email='" . $emailId . "'");
     while( $row = pg_fetch_assoc($result))
     {
        $password = $row['password'];
        $fname = $row['fname'];
        $lname = $row['lname'];
     }
 
    if(pg_num_rows($result)>0)
    {
      $msg = "Hello $fname $lname, Your Password is '$password'. You can reset it by logging in to website. Thank You";

    // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);


      if(mail($emailId,"My subject",$msg)) {
        echo '<script>alert("Email for password recovery is sent to you")</script>';
       echo '<script>window.location.href = "#.html"</script>'; }
      else
        echo '<script>alert("check Your email")</script>';
    }

 



}
?>
<?php

$conn  = pg_connect( "postgres://gchhaeok:KogioLDWliRV5C5f3e7ZGb8idE5nRK8A@queenie.db.elephantsql.com:5432/gchhaeok" );

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fogot Password</title>
  <link rel="stylesheet" href="index2.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

<style>
body
 {
  background-image: url("fopo.jpg");
  background-repeat: repeat;
  font-family: "Helvetica Neue", Helvetica, Arial;
  /* padding-top: 20px; */
  background-size:cover;
}
</style>
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
        <li><a href="contactUs.php">CONTACT</a></li>
        <li><a href="beneficiary_form.php">MAKE AN APPOINTMENT</a></li>

        <li><a href="LoginPage.php">LOGIN</a></li>
        <li><a href="Signup.html">SIGN UP</a></li>

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

  <!----============================= Heading===============================================-->
<div style=" padding:15px; margin-left: 15px; font-family: font-family: 'Gilda Display', serif;; font-size: 20px ">

  <h3>Forgot Password ? Dont Worry...!</h3>  <br>
   Please Enter Your email address you used to sign up on this<br> site and we will Assist you in recovering your password.

</div>

<br><br><br><br><br>
<form action="forgot_password.php" method="POST">
<div style="padding:15px; font-family: serif; font-size: 20px; margin-left: 15px">
 <b> Enter Your Email Here</b>
</div>

<div style="padding:5px; font-family: serif;  margin-left: 25px">
  <input type="email" name="email" size="35">
</div>

<br>
<div style="padding:5px; font-family: serif;  margin-left: 25px" class="btn">
  <input type="submit" name="password-reset-token"  size="35">
</div>

</form>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
  
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
