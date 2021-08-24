<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meningitis Vaccine</title>
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

	<h1>Meningitis (MCV4) Vaccine </h1><br><br>

	<p>Vaccine Door offers every vaccine available in the India including Meningitis (MCV4) Vaccine. <br>
	We offer a wide array of employee health, student health, travel health, and laboratory services to individuals, schools, corporations, <br>
	and other health care organizations. We offer same day or next day appointments <br>and allow you to book your appointments online!
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
        <h3>What is Meningitis (Meningococcal Meningitis) </h3> 

    <br>
    <p>Meningococcal meningitis is a bacterial infection of the meninges and blood. 
		The meninges are membranes that cover the brain and spinal cord. 
		It is caused by different types of bacteria called Neisseria meningtidis. 
		It is spread through airborne droplets or contact of objects contaminated by an infected person’s secretions. 
		Close contact of a carrier increases the risk. <br><br>
		</p>
		Adolescents and young adults are at an increased risk of contracting meningitis due to certain lifestyle factors and behaviors.<br><br>People is close quarters such as schools or dormitories , &nbsp Sharing drinking glasses, eating utensils or water bottles or Kissing.
		<br><br>
		<p>Since the risk is higher in young adults and adolescents, meningitis vaccine is required in many states (including Nevada) 
		for seventh-graders and freshmen in college.</p>
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
		<br>
		<p>   	Symptoms of meningitis are rapidly progressing and commonly begin with fever, chills, tiredness and rash and hours 
		to days later severe headache, neck and back pain, neck stiffness, vomiting, change of consciousness and coma. 
		In some meningitis infections, the serious complications of shock, coma and death can occur within hours even with proper medical treatment. <br><br>
				About 10-15% of people with bacterial meningococcal infection die even with antibiotic treatment. 
		Meningitis is diagnosed by testing blood and spinal fluid samples taken. Unfortunately, because meningitis symptoms can sometimes be
		mistaken for other illnesses, it can lead to delayed diagnosis and treatment.
		</p>
		<br><br>
	
        
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>

<br /><br><br>
  </main>



  

  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      The vaccine is administered into the deltoid muscle of the arm. It can be given into the muscle of the upper leg in infants.<br>The vaccine that is usually given is a Quadrivalent vaccine (MCV4 or MenACWY). It protects against serotypes A, C, W-135, and Y. This is also the vaccine that is recommended <br>for travel to risk countries in Africa and to Saudi Arabia for the Hajj. The number of doses<br> that should be administered varies depending on the reason for vaccination, age, and health information.
      <br><br><br><br><br>
    </p>
  </div>
  <!---=========================================================================-->

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Adolescents beginning at age 11 or prior to 7th grade (required in many states such as Nevada)</li> <br>
        <li>Students who will live in dormitories or freshmen students at Universities (also required in many states)
        </li><br>
        <li>Individuals who have chronic liver disease or who are having or have had a liver transplant.
        </li><br>

        <li>Anyone taking a certain immunosupressant medications</li><br>
        <li>Persons without a spleen or with a complement component deficiency</li><br>
      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>Persons with HIV</li><br>
        <li>Certain laboratory personnel
        </li><br>
        <li>Military recruits.</li><br>

        <li>People at risk because of a serogroup B meningococcal outbreak
        </li><br>
        <li>Travelers visiting a country having an epidemic or endemic or epidemic prone at certain times of year (such as in the “Meningitis Belt” in sub-Saharan Africa)</li>
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

	<button class="accordion"><b>Can the meningitis vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p> Yes, meningitis can be given with other vaccines at the same time.</p>
  </div>

	<button class="accordion"><b>Is the Meningitis vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>From the limited data available, research suggests that receiving meningococcal ACWY vaccine 30 days prior to pregnancy or
	during pregnancy does not increase one’s risk of causing harm to the fetus.
	</p>
  </div>
  
  <button class="accordion"><b> How long does the meningitis vaccine last?</b></button>
  <div class="panel">
    <p>In majority of people, a single dose of meningococcal ACWY vaccine is sufficient for life. 
		However, if a person continues to be at risk for exposure, he/she should receive a booster dose every 5 years. </p>
  </div>
  
  <button class="accordion"><b> Is a meningitis vaccine required?</b></button>
  <div class="panel">
    <p>Meningitis vaccine is required for 7th grade students in Nevada and visitors arriving to Umrah, Hajj are required to 
		submit proof of vaccination no less than 10 days prior to arrival to Saudi Arabia.</p>
  </div>
  
  <button class="accordion"><b>Should I get the meningitis vaccine?</b></button>
  <div class="panel">
    <p>Yes, CDC recommends vaccination for all preteens and teens. It is recommended for college 
		students that are living in a dormitory, children and adults traveling to risk areas.
	</p>
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

