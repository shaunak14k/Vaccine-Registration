<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hepatatis A</title>
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

	<h1>Hepatitis A Vaccine</h1><br><br>

	<p>
	Vaccine Door offers every vaccine available in the India including 
	hepatitis A vaccine. We offer a wide array of employee health, student
	health,<br /> 
	travel health, and laboratory services to individuals, schools, 
	corporations, and other health care organizations.We offer same day or 
	next day<br />
	appointments and allow you to book your appointments online!
	<br><br><br>
      <hr><br>
	</p>
  </div>
  <br /><br>
  <!----=============================End of Heading===============================================-->
  <!----============================Dabba===============================================-->

  <main>
    <div id="parent">
      <img src="question-mark.svg" alt="i1" />
      <div id="content">
        <h3>What is it? </h3>
        <p>Hepatitis A is a disease of the liver caused by a virus. 
		The hepatitis A virus (HAV) is spread through fecal-oral transmission meaning 
		it can be spread by unhygienic food handling or poor water treatment. 
		Although very rare, HAV can also be spread through blood transfusion.
		</p>
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
        <p>
		  Once a person is infected with HAV they may or may not have symptoms of the disease which includes fever, anorexia, 
		  nausea, malaise, abdominal pain and discomfort, diarrhea, dark urine and jaundice (yellowing of the skin and eyes). 
		  Some people, especially young children, may show no outward signs of infection, but may still be able to spread the disease.
		 </p> 
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>


    <div id="parent3">
      <img src="num.svg" alt="i1" />
      <div id="content3">
        <h3>Prevalence </h3>
        <p>
		  Nationwide epidemics of HAV occur in the United States approximately every 10 years. Rates of HAV infection in
		  the United States has been steadily declining since 1995 which is attributed to high vaccination rates.
        </p>
      </div>
    </div>
  </main>

  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      
      <br><br>
	  Because the hepatitis A virus is easily spread by close personal contact with an infected person, 
	  or by ingesting contaminated foods or water, it is often recommended <br>for travelers to third world
	  and pandemic  countries and people in the food service industry. It may also be required by some school programs.
	  For travelers, the first dose of HAV<br> vaccine should be given as soon as a departure date is determined. 
	  Other groups at increased risk for HAV are men who have sex with men, and people who use illegal street drugs. 
	  HAV vaccine is also recommended for:
	  <br><br><br><br>
    </p>
  </div>
  <!---=========================================================================-->

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
		<li>All children between their first and second birthday (12-23 months of age)</li> <br>
		<li>Children between 2 years old and 18 years old who live in areas where routine vaccination has been implemented related to high incidences of HAV.</li> <br>
		<li>Individuals who have chronic liver disease or who are having or have had a liver transplant.</li> <br>
		</li> <br>
      </ul>
    </div>

    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
		<li>Adoptive parents and the members of their household whose child is coming from a country with high HAV prevalence.</li><br>
		<li>Individuals who need treatment with clotting factor concentrates.</li><br>
		<li>Individuals who work with primates infected with HAV.</li><br>
      </ul>
    </div>
  </div>
  <br /><br><br>
<!-- 
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
	<ul>
	    <h4>Others may also choose to receive HAV vaccination including:</h4>
		<li>Individuals who have been exposed to HAV or an area of HAV outbreak that have not been vaccinated.</li><br>
		<li>Anyone over 1 year of age who wants protection from the HAV.</li><br>
	</ul>
    </div>
  <br /><br><br> -->

  <a href="#" class="push_button"> Book Appointment</a>


  <br><br><br><br>




  <!----==========FAQ========================-->

  <h1 style="text-align: center;">Frequently Aksed Questions</h1>
  <br><br><hr>

  <br><br><br><br>

	<button class="accordion"><b>Is Hepatitis A vaccine safe?</b></button>
  <div class="panel">
    <p> Yes, it has been recommended and safely administered for over 20 years.</p>
  </div>

	<button class="accordion"><b>Is the Hepatitis A vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>The safety of hepatitis A vaccination during pregnancy has not been determined; however, because hepatitis A vaccine
	is produced from inactivated HAV, the theoretic risk to the developing fetus is expected to be low. 
	Vaccination should be discussed with Primary OB/GYN provider.
</p>
  </div>
  
  <button class="accordion"><b> What are the side effects of hepatitis A vaccine?</b></button>
  <div class="panel">
    <p>Most people who get the Hepatitis A vaccine do not have any problems with it. 
	Minor problems are soreness and redness at the injection site, low-grade fever, headache, and/or tiredness.
 </p>
  </div>
  
  <button class="accordion"><b>Can the Hepatitis A vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p> Yes, Hepatitis A vaccine can be given at the same time as other vaccines.</p>
  </div>
  
  <button class="accordion"><b>How long does hepatitis A vaccine last?</b></button>
  <div class="panel">
    <p> After completing the series, protection is known to last a lifetime.</p>
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

