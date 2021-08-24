<?php
include 'dbconnect.php';
if(isset($_POST['submit']))
{
$res1 = pg_query($conn,"SELECT * from beneficiary where id = '$_POST[cust_id]'");

if(pg_num_rows($res1)>0)
{
  echo "<script>alert('User Already Exist')
      window.location.href='user_registration.php' </script>";
}



$id =  $_POST['cust_id'];
$fname=$_POST['cust_first_name'];
$lname=$_POST['cust_last_name'];
$mail=$_POST['cust_email'];
$contact = $_POST['cust_cont_no'];
$password = $_POST['cust_newpass'];
$password1 = $_POST['cust_confirmpass'];
$address = $_POST['cust_address'];
$city = $_POST['cust_city'];
$state = $_POST['cust_state'];
$zip  = $_POST['cust_zip'];
$country = $_POST['cust_country'];
$gender = $_POST['cust_gender'];
$age = $_POST['cust_age'];
  
 $res = pg_query("INSERT INTO beneficiary values($id,'$fname','$lname','$mail','$contact','$address','$city','$state','$zip','$country','$password','$gender','$age')") or die(pg_last_error()); 

if($res) {
echo "<script>alert('Registered SuccessFully')
      window.location.href='LoginPage.php' </script>"; 
  
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="index2.css" />
  <link rel="stylesheet" href="asset\css\reg_page_style.css">
  <link rel="icon" href="asset/img/favicon.png" type="image/ico">

</head>
<style>body {
  background-image: url("back.jpeg");
  background-repeat:repeat;
  font-family: "Helvetica Neue", Helvetica, Arial;
  /* padding-top: 20px; */
  background-size:cover;
}</style>

<body>


  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</li>
        <li><a href="Vaccine Pages/Service.php">SERVICES</a></li>
        <li><a href="Contactus.php">CONTACT</a></li>
        <li><a href="Beneficiary_form.php">MAKE AN APPOINTMENT</a></li>
        <li><a href="LoginPage.php">LOGIN</a></li>
        <li><a href="Signup.html">SIGN UP</a></li>

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>
  <div class="container">

    <form id="signup" method="post" action="user_registration.php">

      <div class="header">


        <h3>Sign Up</h3>

        <p>You want to fill out this form</p>
          
      </div>



      <div class="inputs">
        <b>

          Aadhar No &emsp;&emsp;&emsp;&nbsp;
          <input type="text" placeholder="Aadhar No" name="cust_id" pattern="[0-9]{12}" required autofocus />&nbsp; *
          <br>

          First Name &emsp;&emsp;&emsp;&nbsp;
          <input type="text" placeholder="First Name" name="cust_first_name" required autofocus />&nbsp; *<br>

          Last Name &emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input type="text" placeholder="Last Name" name="cust_last_name" required autofocus />&nbsp; *<br><br>

          Age &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input min="1" type="number" placeholder="Age" name="cust_age" required autofocus  max=80/>&nbsp; *<br><br><br>

          Gender &emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
           <input type="radio" name="cust_gender" value="Male"> Male&emsp;
          <input type="radio" name="cust_gender" value="Female"> Female&emsp;
          <input type="radio" name="cust_gender" value="Other"> Other<br><br>

          Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="email" placeholder="E-mail" name="cust_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
            required autofocus />&nbsp; *<br>

          Contact number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="0123456789" pattern="[0-9]{10}" name="cust_cont_no" required
            autofocus />&nbsp; *<br>

          <br>
            <br>

          Create a password
          <input type="password" placeholder="Create a new Password" name="cust_newpass"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            required autofocus />&nbsp; *<br>

          Confirm Password
          <input type="password" placeholder="Confirm Password" name="cust_confirmpass" required autofocus />&nbsp;
          *<br>

          <br>
            <br>

          Address &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input type="text" placeholder="Address" name="cust_address" required autofocus>&nbsp; *<br>

          City/Village &emsp;&emsp;&emsp;&nbsp;
          <input type="text" placeholder="City" name="cust_city" autofocus><br>

          State &emsp;&emsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;
          <input type="text" placeholder="State" name="cust_state" autofocus><br>

          Zip/Postal &emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input type="text" placeholder="411 000" name="cust_zip" required autofocus>&nbsp; *<br>

          Country &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input type="text" placeholder="Country" name="cust_country" required autofocus>&nbsp; *<br>

          <div class="checkboxy">
            <input name="cecky" id="checky" value="1" type="checkbox" /><label class="terms">I accept the terms of
              use</label>
          </div>
          <br>

          <input type="submit" value="SIGN UP NOW" id="submit" name="submit">

      </div>

    </form>


  </div>

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
          <a href="Home.php">Home</a> <br />
            <a href="about.php">About Us</a> <br />
            <a href="Vaccine Pages/Service.php">Services</a> <br />
            <a href="Contactus.php">Contact Us</a><br />
            <a href="Beneficiary_form.php">Book a Vaccine</a><br />
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




