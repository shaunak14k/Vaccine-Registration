<?php
include 'dbconnect.php';
if(isset($_POST['submit']))
{
    $res1 = pg_query($conn,"SELECT * from center where email = '$_POST[hospital_email]'");

if(pg_num_rows($res1)>0)
{
  echo "<script>alert('Center Already Exist')
      window.location.href='hospital_registration.php' </script>";
}

  $cname  = $_POST['hospital_name'];

  $email  = $_POST['hospital_email'];

  $contact = $_POST['hospital_cont_no'];

  $password = $_POST['hospital_newpass'];

  $address  = $_POST['hospital_address'];

  $city = $_POST['hospital_city'];

  $state = $_POST['hospital_state'];

  $zip  = $_POST['hospital_zip'];  

    $type = $_POST['CenterType'];
  $res = pg_query("INSERT INTO center values('$cname','$email','$contact','$address','$city','$state','$zip','India','$password','$type')") or die(pg_last_error()); 

if($res) {
echo "<script>alert('Registered SuccessFully')
      window.location.href='LoginPage.php' </script>"; 
  
}

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hospital Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="index2.css" />
	<link rel="stylesheet" href="asset\css\reg_page_style.css">
  <link rel="icon" href="asset/img/favicon.png" type="image/ico">
 </head>
<style>

body {
    background-image: url("back.jpeg");
    background-repeat:repeat;
    font-family: "Helvetica Neue", Helvetica, Arial;
    /* padding-top: 20px; */
    background-size:cover;
}
</style>


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
        <li><a href="Signup.html">SIGN UP</a></li>      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

   <div class="container">

    <form id="signup" action="hospital_registration.php" method="POST">

        <div class="header">
        
            <h3>Sign Up for Center Admin</h3>
            
            <p>You want to fill out this form</p>
            
        </div>
        

        <br><br><br>
        <div class="sep"></div>

        <div class="inputs">
        <b>
			


			Center Name &emsp;&nbsp;&nbsp;
            <input type="text" placeholder="center Name" name="hospital_name" required autofocus />&nbsp; *<br>
			
			Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="email" placeholder="E-mail" name="hospital_email" required autofocus />&nbsp;*<br>
						
			Contact number &nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="0123456789" pattern="[0-9]{10}" name="hospital_cont_no" required autofocus />&nbsp; *<br>

			<br>   <br>
        Center Type &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
          <select name="CenterType" style="width:200px;">
            <option disabled selected>-- Select Hospital Type --</option>
            <option value="Yes">Government</option>
            <option value="No">Private Hospital</option>
           
          </select> <br><br>
   			Create a password
			<input type="password" placeholder="Create a new Password" name="hospital_newpass" required autofocus />&nbsp; *<br>

			Confirm Password
			<input type="password" placeholder="Confirm Password" name="hospital_confirmpass" required autofocus  />&nbsp; *<br>
				
			<br>   <br>
				
			Address &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="Address" name="hospital_address" required autofocus> *<br>
			
			City/Village &emsp;&emsp;&emsp;
			<input type="text" placeholder="City" name="hospital_city" autofocus><br>
			
			State &emsp;&emsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;&nbsp;
			<input type="text" placeholder="State" name="hospital_state" autofocus><br>
			
			Zip/Postal &emsp;&emsp;&emsp;&nbsp;&nbsp;
			<input type="text" placeholder="411 000" name="hospital_zip" required autofocus>&nbsp; *<br>
			
		
			
            <div class="checkboxy">
                <input name="cecky" id="checky" value="1" type="checkbox" /><label class="terms">I accept the terms of use</label>
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