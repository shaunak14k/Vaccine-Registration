<?php
session_start();
if(isset($_SESSION['hemail']))
{
  include '../dbconnect.php';
  $date = date('d.m.Y',strtotime("+1 days"));
  $result= pg_query($conn,"SELECT * from appointment where email = '".$_SESSION['hemail']."' ");
  $total = pg_num_rows($result);

   $result1= pg_query($conn,"SELECT * from appointment where appointment.date = '$date' and email = '".$_SESSION['hemail']."'  ");
   $todaysappointment = pg_num_rows($result1);

    $result2= pg_query($conn,"SELECT * from appointment where appointment.date = '$date' and status='complete' and  email = '".$_SESSION['hemail']."' ");
   $completed = pg_num_rows($result2);

   $result3= pg_query($conn,"SELECT * from appointment where appointment.date = '$date' and status='pending' and  email = '".$_SESSION['hemail']."' ");
   $pending = pg_num_rows($result3);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="index2.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">



</head>



<style>
  .logi {

    text-align: center;
    margin: 30px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
  }

  .tech {
    text-align: center;
    font-size: 30px;
    height: 30vh;
    color: white;
    background-color: turquoise;
    border-radius: 4px;
    border: none;

  }

  #tech1 {
    background-color: rgb(255, 106, 106);
  }

  #tech2 {
    background-color: rgb(174, 147, 243);
  }

  #tech3 {
    background-color: rgb(197, 171, 0);
  }
</style>

<body>
  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <li><a href="Dashboard.php">DASHBOARD</a></li>
        <li><a href="AppointmentDetails.php">APPOINTMENT DETAILS</a></li>
        <li><a href="AvailableVaccines.php">AVAILABLE VACCINES</a></li>
        <li><a href="Price.php">PRICE</a></li>
        <li><a href="Contactus.php">CONTACT</a></li>
        <li><a href="Profile.php">PROFILE</a></li>
        <li><a href="../index.php">LOG OUT</a></li>


      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

      
  <h1> VaccineDoor Dashboard </h1><br><br>
<div >
        <center><h3> <?php include '../login_messages.php'; ?></h3></center>
        
      </div>
  <div class="logi">

    <div id="tech1" class="tech">Todays Appointments <br><br><br>

      <?php echo $todaysappointment ?></div>


    <div id="tech2" class="tech">Todays Completed Appointments<br><br>
      
      <?php echo $completed ?></div>

    <div id="tech3" class="tech">Todays Remaining Appointments<br><br>
      
      <?php echo $pending ?></div>

    <div id="tech4" class="tech">Total Appointments<br><br><br>
      
      <?php echo $total ?></div>



  </div>

  <br><br><br><br>


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
            <a href="Dashboard.php">Dashboard</a><br />
            <a href="AppointmentDetails.php">Appointment Details</a> <br />
            <a href="AvailableVaccines.php">Available Vaccines</a> <br />
            <a href="Price.php">Price</a><br />
            <a href="Contactus.html">Contact Us</a><br />


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