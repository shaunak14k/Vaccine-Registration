<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Rabies</title>
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

	<h1>Rabies Vaccine</h1><br><br>

	<p>
	Vaccine Door offers every vaccine available in the India including 
	Rabies vaccine . We offer a wide array of employee health, student
	health,<br /> 
	travel health, and laboratory services to individuals, schools, 
	corporations, and other health care organizations.We offer same day or 
	next day<br />
	appointments and allow you to book your appointments online!
	<br><br><br>
      <hr>
	</p>
  </div>
  <br /><br>
  <!----=============================End of Heading===============================================-->
  <!----============================Dabba===============================================-->

  <main>
    <div id="parent">
      <img src="question-mark.svg" alt="i1" />
      <div id="content">
        <h3>What is it? </h3><br>
        <p>Rabies is a progressive infection of the central nervous system. It is caused by a virus in the family Rhabdoviradae, 
		genus Lyssavirus. It is transmitted via bites, scratches, or licks onto open skin or mucosal surfaces by rabid animals.</p>
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3><br>
        <p>After a person becomes infected, the period before symptoms appear is variable but is generally 20-90 days after exposure depending on the severity and site of the bite. Sometimes, the incubation period can last up to several years. Initial symptoms can  include: <br><br>

          <p>
		<ul>
		<li>Tingling at the site of the bite/scratch</li> <li>Fever</li>
		<li>Headache</li>
		<li>Anxiety/Irritability</li>
		<li>Depression</li>
		<li>Muscle Aches</li></ul> </p></p>
		
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>



    <div id="parent3">
      <img src="num.svg" alt="i1" />
      <div id="content3">
        <h3>About the Vaccine</h3>
        <p> The pre-exposure vaccine series is administered in 3 doses. It is necessary that the 3 doses follow a precise schedule of day 0, day 7, day 21 or day 28. 
          It is given into the deltoid muscle. 
          The post-exposure vaccine series is administered in a 4 or 5 dose series depending on certain factors of exposure and the person's health information and should be decided by individual consultation and assessment of each case scenario.
          Vaccine Door Clinicians are knowledgeable in Rabies post-exposure prophylaxis. 

        </p>
      </div>
    </div>
  </main>



  

  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      Rabies vaccination is given for one of two reasons,<br>
      Pre-exposure prophylaxis: Administering the vaccine series preventatively for people at risk for contracting Rabies<br>
      Post-exposure: Administering the vaccine series after being exposed or possibly exposed to the Rabies virus<br>
      <br><br><br><br><br>
    </p>
  </div>
  

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Travelers on long-stay trips in high-risk destinations</li> <br>
        <li>Veterinarians</li><br>
        <li>Animal control and wildlife workers
        </li><br>
      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Travelers in high-risk destinations with extensive outdoor exposure, regardless of length of stay.</li><br>
        <li>Workers in rabies research, diagnostic, or biologic facilities</li><br>
        <li>Spelunkers.</li><br>
      </ul>
    </div>
  </div>
  <br /><br><br>
  <a href="#" class="push_button"> Book Appointment</a>


  <br><br><br><br>




  <!----==========FAQ========================-->

  <h1 style="text-align: center;">Frequently Aksed Questions</h1>
  <br><br><hr>

  <br><br><br><br>

	<button class="accordion"><b>How long does the rabies vaccine last?</b></button>
  <div class="panel">
    <p> Rabies vaccines are lifelong.</p>
  </div>

	<button class="accordion"><b>Can the Rabies vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p>Yes, rabies can be given the same time with other vaccines.</p>
  </div>
  
  <button class="accordion"><b>Is the Rabies vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>No studies have been performed to determine the risk of receiving the rabies vaccine during pregnancy.
	However, if the benefit of having the vaccine outweighs a pregnant woman’s potential risk, she should receive the rabies vaccine.
	</p>
  </div>
  
  <button class="accordion"><b>When should I get rabies vaccine?</b></button>
  <div class="panel">
    <p> Completion of pre-exposure rabies vaccines should ideally be at least 1 week prior to potential exposure.</p>
  </div>
  
  <button class="accordion"><b>How many shots do you have to get for rabies?</b></button>
  <div class="panel">
    <p> For pre-exposure rabies vaccination, it is a series of 3 shots given on a strict schedule. 
	For post-exposure, a human blood product, called human rabies immune globulin, is needed, which is injected around the wound multiple times. 
	Post-exposure also requires a series of 4 or 5 rabies vaccines afterwards.</p>
  </div>
  
  <button class="accordion"><b> Should I get the rabies vaccine?</b></button>
  <div class="panel">
    <p>Those who are at an increased risk of contracting rabies, such as vets, people who work closely with bats or 
	mammals, and travelers, should get the rabies vaccine prior to potential exposure.</p>
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

