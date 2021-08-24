
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="stylesheet" href="index2.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">



</head>
<style> 


  table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498DB;
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}


fieldset{

  
  margin: 80px;
  padding: 30px ;
  border-color: black;  
  /* border-style:dotted; */
  box-sizing: border-box;
  font-size: 16px;
}
textarea{
  
  
  width: 50%;
  height: 60%;
  box-sizing:border-box;
  overflow: auto;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 10px 20px 10px 40px;

 }

 dropdown{
   
  font-size: 30px;
  Background-color: white;
  width: 10%;

}



.button {
  border-radius: 10px;
  background-color:whitesmoke;
  color: #00Be55;
  text-align: center;
  font-size: 20px;
  padding: 5px;
  width: 200px;
  transition: all 0.2s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


body {
  background-image: url("hbg.jpg");
  background-repeat: repeat;
  font-family: "Helvetica Neue", Helvetica, Arial;
  /* padding-top: 20px; */
  background-size: cover;
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
        <li><a href="Contactus.html">CONTACT</a></li>
        <li><a href="Profile.php">PROFILE</a></li> 
        <li><a href="Login.php">LOGIN</a></li> 
      

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>
<h1>Vaccination Details</h1>
  <table>
    <thead>
      <tr>
        
        <th>Vaccine</th>
        <th>Center</th>
        <th>Date</th>
        <th>Details</th>
        
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-column="Vaccine">Cholera</td>
        <td data-column="center">Mahesh Hosp</td>
        <td data-column="date">21-04-2021</td>
        <td data-column=" Details"><a href="print.html">Details</a></td>
      </tr>
      <tr>
        <td data-column="Vaccine">Chickenpox</td>
        <td data-column="center">Govt Hosp</td>
        <td data-column="date">1-04-2021</td>
        <td data-column=" Details"><a href="print.html">Details</a></td>
      </tr>
      
    </tbody>
  </table>
  
<!---============Form==============-->
  <fieldset>
    <legend> Personal Details</legend>
    <br>
    <form>

     
      First Name:<input id="uname" placeholder="Username" type="text" required /> <br><br>
      Last Name:<input id="uname" placeholder="Lastname" type="text" required /> <br><br>
      Aadhar Number: &nbsp;&nbsp;<input id="Aadhar Number" placeholder="Aadhar Number" type="number" required /><br><br>
      Email: &nbsp;&nbsp;<input type="email" placeholder="Emailid" type="email" /> <br><br>
      <!-- Password: &nbsp;&nbsp;<input id="Password" placeholder="Password" type="password" required /> &nbsp; &nbsp; -->
      <!-- Confirm Password:<input id="Password" placeholder="Re-enter Password" type="password" required /> -->

      <br><br>
      Contact: &nbsp;&nbsp;<input id="Contact" placeholder="Contact" type="number" required /><br><br>
      Age: &nbsp;&nbsp;<input id="Age" placeholder="Age" type="number" required /><br><br>
      <!-- Zip Number: <input type='text' name='text1' /></li> -->
      Gender: &nbsp;&nbsp; <input type="radio" value="Male"> Male &nbsp; <input type="radio" value="Female">Female &nbsp;
      <input type="radio" value="Other"> Other<br><br>

      <!-- Date of Birth: <input type="date" value=" Date" required><br><br> -->
  
      
      <!--Address -->
    </fieldset>

    <fieldset>
      <legend> Residential Details</legend>
      Address:<br><textarea id="Address" name="Address" rows="5" cols="50" placeholder="Enter you Address here"
      required></textarea><br> <br>

     City:<input id="city" placeholder="City" type="text" required /> <br><br>
     
     State:<input id="State" placeholder="State" type="text" required /> <br><br>

     Zip: &nbsp;&nbsp;<input id="Zip" placeholder="Zip" type="number" required /><br><br>

    </fieldset>

  <center><button class="button"><span> SUBMIT</span></button></center>
  
  </form>



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
            <a href="Dashboard.php">Dashboard</a><br />
            <a href="AppointmentDetails.php">Appointment Details</a> <br/>
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
          <div class="text">Messdate *</div>
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