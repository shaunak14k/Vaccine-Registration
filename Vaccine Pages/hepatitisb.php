<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hepatitis B</title>
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

	<h1>Hepatitis B Vaccine</h1><br><br>

	<p>
	Vaccine Door offers every vaccine available in the India including 
	hepatitis B vaccine. We offer a wide array of employee health, student
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
        <h3>What is it? </h3>
        <p>Hepatitis B is a disease of the liver caused by a virus. The hepatitis B virus (HBV) is spread through
          contaminated blood and other bodily fluids, but can also live on objects for up to seven days. In the United
          States, approximately 2,000 to 4,000 people die each year from complications of HBV such as cirrhosis and
          liver cancer. It is estimated that approximately 1.4 million people in the United States are infected with
          HBV.</p>
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
        <h3>Prevalence</h3>
        <p>
		  Rates of HBV infection in the United States has been steadily declining since the 1980s which is attributed to
		  high vaccination rates and HIV prevention efforts. The CDC reports that approximately 5,000-8,000 individuals 
		  become chronically infected with HBV each year.
        </p>
      </div>
    </div>
  </main>




  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      
      <br>
	  Since HBV can be easily spread through contact with blood and bodily fluids of infected individuals it is often <br>
	  recommended for health care workers and some travelers. HBV vaccine is also recommended for:
	  <br><br><br>
    </p>
  </div>
  <!---=========================================================================-->

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
		<li>Any individual whose job places that at risk for exposure to blood or other bodily fluids.)</li> <br>
		<li>Individuals who’s sex partners are infected with HBV.</li> <br>
		<li>Men who have sex with men.</li> <br>
		<li>Individuals who use injectable street drugs.</li> <br>
		<li>People with more than one sex partner.</li> <br>
		<li>People with chronic liver or kidney disease.</li><br>
      <li>Individuals 60 years and older with diabetes and a recommendation by their doctor.</li><br>
		</li> <br>
      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
		<li>Individuals with diabetes whom are under 60 years old.</li><br>
		<li>Individuals who use kidney dialysis.</li><br>
		<li>Travelers to countries where HBV is common.</li><br>
		<li>Individuals who have been diagnosed with HIV infection.</li><br>
		<li>Staff and residence in developmentally disabled institutions.</li><br>
    <li>Pregnant women may be vaccinated whether or not they are at increased risk.</li><br>
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

	<button class="accordion"><b>Will it harm me to get the Hepatitis B vaccine again?</b></button>
  <div class="panel">
    <p> No, getting extra doses of hepatitis B vaccine is not harmful.</p>
  </div>

	<button class="accordion"><b>Is the Hepatitis B vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>Pregnancy is not a contraindication to vaccination. Limited data suggest that developing fetuses
	are not at risk for adverse events when hepatitis B vaccine is administered to pregnant women.
	Available vaccines contain noninfectious HBsAg and should cause no risk of infection to the fetus. 
	Pregnant women who are identified as being at risk for HBV infection during pregnancy
	(e.g., having more than one sex partner during the previous 6 months, been evaluated or treated for an STD, 
	recent or current injection drug use, or having had an HBsAg-positive sex partner) 
	should be vaccinated but that would be best determined by a patient’s Primary OB/GYN provider.</p>
  </div>
  
  <button class="accordion"><b>What is the schedule for hepatitis B vaccine for adults?</b></button>
  <div class="panel">
    <p>The vaccine is usually given as 2, 3, or 4 injections over 6 to 12 months.
 </p>
  </div>
  
  <button class="accordion"><b>Can the Hepatitis B vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p> Yes, Hepatitis B vaccine can be given at the same time as other vaccines.</p>
  </div>
  
  <button class="accordion"><b>How long does hepatitis B vaccine last?</b></button>
  <div class="panel">
    <p> After completing the series, protection is known to last a lifetime.</p>
  </div>
  
  <button class="accordion"><b>How often do you need to be vaccinated for hepatitis B?</b></button>
  <div class="panel">
    <p>Two, three or four doses of Hepatitis B vaccine should be administered over 6 to 12 months.</p>
  </div>
  
  <button class="accordion"><b>Can you get hepatitis B even after vaccination?</b></button>
  <div class="panel">
    <p>The best way to prevent hepatitis B is by getting vaccinated. 
	The hepatitis B vaccine is safe and effective. Completing the series of shots is needed for full protection.
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
            <a href="#home">Home</a> <br />
            <a href="#about">About Us</a> <br />
            <a href="#search">Services</a> <br />
            <a href="#search">How it Works</a><br />
            <a href="#search">Contact Us</a><br />
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

