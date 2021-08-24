<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Influenza</title>
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

	<h1>Influenza Vaccine </h1><br><br>

	<p>
	Vaccine Door offers every vaccine available in the India including 
	hepatitis A vaccine. We offer a wide array of employee health, student
	health,<br /> 
	travel health, and laboratory services to individuals, schools, 
	corporations, and other health care organizations.We offer same day or 
	next day<br />
	appointments and allow you to book your appointments online!
	<br><br> <br>
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
        <h3>WHAT IS INFLUENZA VACCINE?</h3>
		<br>
    Influenza is a serious contagious virus that may lead to hospitalization and sometimes even death. 
		Influenza infection affects people differently. Even healthy people may become
		very sick from the flu virus and spread it to others.
		Flu season can begin as early as October and last until May in the United States. 
		The annual flu vaccine is the best way to reduce your chance of having the seasonal flu and decreases
		the chance that you will spread it to others. The more people that are vaccinated in the community, 
		the less the flu can spread.
		Travelers are at a particularly high risk for flu infection. 
		The Northern Hemisphere has a seasonal flu virus usually between October until May. 
		The Southern Hemisphere may begin in April and last through September. 
		The tropical and subtropical areas may have transmission present throughout the year. 
		Travelers are at a higher risk for infection due to air travel and cruise ships which 
		easily facilitate flu transmission.
		</p>
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
        <p>Once a person is infected with HBV they may or may not have symptoms of the disease which includes anorexia,
          fever, rashes, nausea, malaise, abdominal pain and discomfort, nausea, vomiting, headache, muscle and joint
          pain, dark urine, clay colored stools, and jaundice (yellowing of the skin and eyes). Some people, especially
          young children, may show no outward signs of infection, but may still be able to spread the disease. Young
          children are at an increased risk for becoming chronically infected with HBV and are also more likely to be
          asymptomatic, increasing their risk for spreading the disease.</p>
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>


  
    <div id="parent3">
      <img src="num.svg" alt="i1" />
      <div id="content3">
        <h3>What will this season's flu vaccine protect against?</h3>
        <p> The flu vaccine protects against 3 or 4 different strains of Influenza virus, depending on which type of flu vaccine you receive. There are different types of flu vaccines recommended for different age groups to optimize a person's level of protection. <br><br>

        <li>Used for people 6 months through 64 years of age</li>
        <li>This flu vaccine is thimerosal free and preservative free</li>
        <li>This flu vaccine is quadrivalent (protects against four strains).</li>
      
        <br><br>

        About 70-90% of flu deaths occur among people 65 and older. The high dose flu shot produces a stronger immune response, meaning the person with the vaccine is less likely to get sick.

        Getting a flu shot is more important than it may sound. It will help keep you healthy, but it will also protect others that may not be able to get the vaccine or are at a higher risk of getting sick. Vaccinedoor offers this season's flu shot, meaning you can stay healthy and keep others healthy as well.

       </p>
      </div>
    </div>
  </main>



  

  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      About 70-90% of flu deaths occur among people 65 and older. The high dose flu shot produces a stronger immune response, meaning the person with the vaccine is less likely to get sick. <br>
      Getting a flu shot is more important than it may sound. It will help keep you healthy, but it will also protect others that may not be able to get the vaccine or are at a higher risk of getting sick. <br>Vaccinedoor Health offers this season's flu shot, meaning you can stay healthy and keep others healthy as well.
      <br><br><br><br><br>
    </p>
  </div>
  <!---=========================================================================-->

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>There are inactivated influenza vaccines (IIV) that are approved for people as young as 6 months of age.</li> <br>
        <li>Some vaccines are only approved for adults. For example, the recombinant influenza vaccine </li><br>
        <li>Pregnant women and people with certain chronic health conditions can get a flu shot.    </li><br>
      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>People who have a severe egg allergy</li><br>
        <li>People who have had a severe allergic reaction to a flu vaccine in the past</li><br>
        <li>Children younger than 6 months old.</li><br>
        <li>(RIV) is approved for people aged 18 years and older, and the adjuvanted and high-dose inactivated vaccines are approved for people aged 65 years and older.</li><br>
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

	<button class="accordion"><b>Can the Influenza vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p> Yes, the Influenza vaccine can be given with other vaccines at the same time.</p>
  </div>

	<button class="accordion"><b>Is the Influenza vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>Yes. Not only is it safe in pregnancy, it is actually recommended.
	Receiving the inactivated flu vaccine during pregnancy decreases one’s severity of symptoms and 
	risk of complications during pregnancy should she contract the flu.
</p>
  </div>
  
  <button class="accordion"><b>  Should I get the influenza vaccine?</b></button>
  <div class="panel">
    <p>Yes. Receiving the flu vaccine decreases your risk of contracting strains of influenza that commonly cause severe illness. </p>
  </div>
  
  <button class="accordion"><b> What are the different flu vaccines?</b></button>
  <div class="panel">
    <p>Live-attenuated and inactivated.</p>
  </div>
  
  <button class="accordion"><b>Is flu vaccine dangerous?</b></button>
  <div class="panel">
    <p>No, however there are different types of the flu vaccine: live-attenuated and inactivated. 
	Healthy, immunocompetent people can receive either type. However, people who are immunocompromised should opt for the inactivated type.
</p>
  </div>
  
  <button class="accordion"><b>When should influenza vaccine be given?</b></button>
  <div class="panel">
    <p>The influenza vaccine should be given annually, ideally at the beginning of each flu season.</p>
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

