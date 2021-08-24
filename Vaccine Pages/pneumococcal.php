<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pneumococcal Vaccine</title>
  <link rel="stylesheet" href="demo.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
 <link rel="icon" href="favicon.png" type="image/ico">
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
        <li><a href="Service.php">SERVICES</a></li>
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

	<h1> Pneumococcal Vaccine </h1><br>

	<p>Pneumococcal vaccines are vaccines against the bacterium Streptococcus pneumoniae.Their use can prevent some cases of pneumonia, <br>meningitis, and sepsis. There are two types of pneumococcal vaccines: conjugate vaccines and polysaccharide vaccines. They are given by injection<br> either into a muscle or just under the skin.  
    The World Health Organization (WHO) recommends the use of the conjugate <br> vaccine in the routine immunizations given to children.They recommended three or four doses are between 71<br> and 93% effective at preventing severe pneumococcal disease.<br> The polysaccharide vaccines, while effective in healthy adults, are not effective in children less than two years old or those with poor immune function.<br>
    
   
	<br><hr>
      
	</p>
  </div>
  <br /><br>
  <!----=============================End of Heading===============================================-->
  <!----============================Dabba===============================================-->


  <br><br>
  <br><br>
  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      It is recommended that people who are at greater risk for becoming infected with Streptococcus pneumonia <br>bacteria such as people over 
	the age of 65 receive the vaccine. Other individuals who should receive pneumococcal vaccine include:
      <br><br><br><br><br>
    </p>
  </div>
  <!---=========================================================================-->

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Individuals between 2 and 64 years of age with certain health conditions including immunosuppression.</li><br>
        <li>Individuals with alcoholism.</li><br>
      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Individuals between 19 and 64 years old who have asthma or who smoke.</li><br>
        <li>Individuals who are taking medications that can interfere with the immune system.</li><br>
      </ul>
    </div>
  </div>
  <br /><br><br>

  
  

  <a href="#" class="push_button"> Book Appointment</a>


  <br><br><br><br>




  <!----==========FAQ========================-->

  <h1 style="text-align: center;">Frequently Aksed Questions</h1>
  <br><br><br><hr>

  <br><br><br><br>

	<button class="accordion"><b>Who is at increased risk of pneumococcal disease?</b></button>
  <div class="panel">
    <p> Children under five years of age, and especially those under two years of age. Older people over age 65 years. 
	Individuals at higher risk for pneumococcal infection include those with HIV infection, sickle cell disease, asplenia, and chronic kidney disease. 
	Among infants, additional higher risk groups are those infants who are not breast-fed and who have indoor smoke exposure.</p>
  </div>

	<button class="accordion"><b>How is pneumococcal disease spread?</b></button>
  <div class="panel">
    <p>It is spread from person to person through respiratory droplets (e.g., due to coughing or sneezing). 
	The noses and throats of up to 70% of healthy people contain pneumococcus at any given time.</p>
  </div>
  
  <button class="accordion"><b>Why do we vaccinate children against pneumococcal disease?</b></button>
  <div class="panel">
    <p>The risk of serious pneumococcal disease is highest in the first year of life, but remains high throughout the first 24 months of life. 
	Vaccinating against pneumococcal disease is a cost-effective way of preventing the disease. Vaccination can prevent substantial mortality and 
	morbidity in the underserved populations of the poorer countries.</p>
  </div>
  
  <button class="accordion"><b>What is the vaccination schedule for the pneumococcal vaccine? </b></button>
  <div class="panel">
    <p>This vaccine should be given in 3 doses. The minimum age to receive the first dose is 6 weeks, with 
	a minimum interval of four weeks between the three doses - e.g., 6, 10 and 14 weeks.</p>
  </div>
  
  <button class="accordion"><b>Can the pneumococcal vaccine be administered at the same time as other vaccines?</b></button>
  <div class="panel">
    <p>The pneumococcal conjugate vaccine can be co-administered with other EPI vaccines.</p>
  </div>
  
  <button class="accordion"><b>Can a premature child be vaccinated?</b></button>
  <div class="panel">
    <p>Yes, a premature child can and should be vaccinated at or after 6 weeks of age</p>
  </div>
  
 

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>

<br><br>
<br><br>
<br><br>
  <!----==========FAQ========================-->

  
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

