<?php
session_start();
include 'dbconnect.php';
include 'login_check.php';
if(isset($_POST['submit']))
{

  
  $Aadhar = $_POST['AadharNo'];
  $checkReg =  pg_query($conn, "SELECT * FROM beneficiary WHERE id = '".$Aadhar."'");
  $numrows =  pg_num_rows($checkReg);
  if($numrows == 0)
  {
        $_SESSION['form']['status']   = "ERROR";
        $_SESSION['form']['message']  = "Enter Valid Aadhar Number";
        header('location: beneficiary_form.php');
  }
  $date = $_POST['date'];
  $center = $_POST['CenterName'];
  $vid = $_POST['vaccine'];
  $time = $_POST['time'];
  $vdata =   pg_query($conn, "SELECT vname FROM vaccine WHERE vid = '".$vid."'") or die("Vdata Error");

  $cdata =   pg_query($conn, "SELECT cname FROM center WHERE email = '".$center."'") or die("cdata Error");
 
  $beneficiary_det = pg_query($conn,"SELECT fname,lname,email from beneficiary where id='".$Aadhar."'");
  while($msgdet = pg_fetch_array($beneficiary_det))
  {
    $fname = $msgdet['fname'];
    $lname = $msgdet['lname'];
    $useremail = $msgdet['email'];
  }
        while($data = pg_fetch_array($vdata))
        {
            $vname= $data['vname'];
            
        }
       
        while($data1 = pg_fetch_array($cdata))
        {
            $cname = $data1['cname'];
        }

       $res =  pg_query($conn, "SELECT * FROM appointment WHERE id = '".$Aadhar."' and vid= '".$vid."'");
      $numrows =  pg_num_rows($res);

      if($numrows > 0)
      {
        $_SESSION['form']['status']   = "ERROR";
        $_SESSION['form']['message']  = "You Have Already took this Vaccine";
        header('location: beneficiary_form.php');
        exit; 
      }
      else 
      {
         
        if($res=pg_query($conn, "INSERT INTO appointment VALUES('$Aadhar','$vid','$center','$date','$time')") or die(pg_last_error()))
        {
          $msg = "Dear $fname $lname, appointment at $cname is scheduled on $date for $vname immunization, report at $time . Thank You.\n\t\t VaccineDoor ";
          mail($useremail,"Vaccine Appointment",$msg);
          $_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']    = "You Have Booked $vname Vaccine successfully.Check Email for more details.";
        
        }
      }
      

}
?>



<!DOCTYPE html>

<html lang="en">

<head>
  <title>Appointment Request Form</title>

  <link rel="stylesheet" href="index2.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="asset\css\reg_page_style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="icon" href="asset/img/favicon.png" type="image/ico">
  <script>
    $(function () {
      $("#datepicker").datepicker({ minDate: 0 });
    });
    $(document).ready(function () {
      $('input.timepicker').timepicker({});
    });
    $('.timepicker').timepicker({
      timeFormat: 'h:mm p',
      interval: 60,
      minTime: '10',
      maxTime: '6:00pm',
      defaultTime: '11',
      startTime: '10:00',
      dynamic: false,
      dropdown: true,
      scrollbar: true
    });
  </script>

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
        <li><a href="#.php">MAKE AN APPOINTMENT</a></li>
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

  <div class="container">

    <form id="signup" name="cust_registration" action="beneficiary_form.php" method="post">

      <div class="header">
        <?php include 'login_messages.php'; ?>
        <h3>Appointment Request Form</h3>

        <p>Enter details of the Beneficiary </p>

      </div>

      <div class="inputs">
        <b>
          Aadhar No. &emsp;&emsp;
          <input type="text" placeholder="Aadhar No" name="AadharNo" pattern="[0-9]{12}" required autofocus>&nbsp;
          *<br><br>

          Vaccine &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <select style="width:200px;" name="vaccine" id="vaccineID" onchange="getCenter()">
    <option disabled selected>-- Select Vaccine --</option>
    <?php
         // Using database connection file here
        $records = pg_query($conn, "SELECT vname,vid From vaccine");  // Use select query here 

        while($data = pg_fetch_array($records))
        {
            echo "<option value='". $data['vid'] ."'>" .$data['vname'] ."</option>";  // displaying data in option menu
        } 
    ?>  
  </select>
<br><br>


        

          Center &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
           <select name="CenterName"  style="width:200px;" id="CenterName" >
              <option disabled selected>-- Select Center --</option>
                <option value=""></option>
               
            </select> <br><br>

          Date &emsp;&emsp;&emsp;&emsp;&nbsp;
          <input type="text" id="datepicker"name="date"> *<br><br>
          <br>
          Time &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input name="time" class="timepicker" required autofocus>&nbsp; *<br>
          <br>
            <br>

          Other Details <br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <textarea id="comorbidities" name="comorbidities" placeholder="Mention Comorbidities of Beneficiary" autofocus
            rows="5" column=5 /></textarea><br><br><br>



          <div class="checkboxy">
            <input name="cecky" id="checky" value="1" type="checkbox" required="required" /><label class="terms"><a>I
                accept the terms & conditions</a></label>
          </div>
          <br>


          <input type="submit" value="BOOK VACCINE" id="submit" name="submit"></a>

      </div>

    </form>

  </div>

  <!-- ********************************************************************************************** -->


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
<script type="text/javascript">


function getCenter() 
{

    var vaccineID = $('#vaccineID').find('option:selected').val();
    $.ajax({
        url: "ajax.php",
        type: "POST",
        data: "vaccineID="+vaccineID,
        dataType:"JSON",
        success: function (response) {
            console.log(response);
            var html = "";
            for (var i = 0; i < response.length; i++) 
            {
              var obj_center = response[i];
              html+="<option value='"+obj_center.email+"'>"+obj_center.cname+"</option>";
            }

            $("#CenterName").html(html);
        },
    });

}


</script>
</body>

</html>




