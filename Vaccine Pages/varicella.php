<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Varicella Vaccine
  </title>
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

    <h1>Varicella (Chickenpox) Vaccine </h1><br><br>

    <p>Vaccine Door offers every vaccine available in the India including hepatitis A vaccine.
      We offer a wide array of<br> employee health, student health, travel health, and laboratory services to
      individuals, schools, corporations,
      and other health care organizations. <br>We offer same day or next day appointments and allow you to book your
      appointments online!
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
        <h3>What is Chickenpox</h3>
        <br><br>
        <p>Varicella (Chickenpox) is a virus called Varicella-zoster virus that is very contagious.
          It is spread through the air or with talking. It can also be spread by touching virus particles.
          If someone has not already been vaccinated or had Chickenpox, the virus can also be spread by people with
          Shingles.
          After having Chickenpox, the virus becomes dormant and can reactivate later in life causing Shingles.<br><br>
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
        <br>
        <p> The very itchy red bumps or chickenpox are quite memorable to those who have had it and seen it.
          The disease starts with fever, sore throat, decreased appetite, and feeling sick.
          Then the virus causes approximately 200-500 itchy blisters that eventually blister and pop forming scabs
          generally over aa period of a few days on the face, chest, back, arms, and legs. An infected person is
          contagious starting 1-2 days before the rash begins.
        </p>
        <br>
        Serious complications of Chickenpox include: <br><br>
          Skin infection,
          Pneumonia,
          Encephalitis (an inflammation of the brain) and
          Pneumonia

        <br>
      </p>
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>



    <div id="parent3">
      <img src="num.svg" alt="i1" /> -
      <div id="content3">
        <h3>About the Vaccine</h3><br>
        <p>
          The vaccine is administered in 2 doses separated by at least 28 days. It is given in the fatty tissue on the
          back of the arm.The vaccine can protect if you have been exposed to someone with Chickenpox and is 70-100% effective in
          protecting against Chickenpox if given within 72 hours of exposure Communities with herd immunity extends protection to infants who are too young to be vaccinated and for adults
          who are unvaccinated due
          to certain contraindications.
          To have evidence of immunity against Varicella you should have one of the following: <br><br>
        <ul>
          <li>2 doses of the Varicella vaccines separated by at least 28 days both given after 1 year of age or</li><br>
          <li>a laboratory test called a titer that shows evidence of immunity or</li><br>
          <li>Diagnosis of Chickenpox infection of Herpes Zoster infection by a health care provider (sometimes not
            accepted if you are a health care worker or student)</li><br>
        </ul>
        </p>
        <br>
      </div>
    </div>
  </main>



  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      Everyone eligible to have the vaccine should be vaccinated unless that person already has immunity from having
      Chickenpox infection and especially:
      <br>
      <br>The vaccine should be given starting in childhood at 12 months of age but adolescents and adults can have the vaccine as well later. The vaccine is very safe and<br> effective and protects against almost all cases of severe disease. Not only does the vaccine protect yourself it also helps protect your community <br>especially those that cannot get the vaccine such as weakened immune system and pregnant women. For those who still get <br>chickenpox the infection is usually more mild with less blisters. The Varicella vaccine provides<br> approximately 92-93% immunity with the two recommended doses.

      <br><br><br><br><br>
    </p>
  </div>
  <!---=========================================================================-->












  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li> Susceptible travelers</li> <br>
        <li> Health students and workers</li><br>
        <li> Teachers</li><br>
        <li>Immigrants and refugees</li><br>
        <li> College students</li><br>


      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>People who live in nursing homes or residential settings</li><br>
        <li> Military.</li><br>
        <li> Non pregnant women of childbearing age.</li><br>
        <li>Immigrants and refugees</li><br>
        <li> Child care workers</li>
      </ul>
    </div>
  </div>
  <br /><br><br>


  <a href="#" class="push_button"> Book Appointment</a>


  <br><br><br><br>




  <!----==========FAQ========================-->

  <h1 style="text-align: center;">Frequently Aksed Questions</h1>
  <br><br><br>
  <hr>

  <br><br><br><br>

  <button class="accordion"><b>Can the Varicella vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p>Yes. However, you should wait at least 30 days after receiving it to get another live vaccine to ensure adequate
      effectiveness. </p>
  </div>

  <button class="accordion"><b>Is the Varicella vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>Pregnant women should not be vaccinated for Varicella since the effects of the varicella virus on the fetus are
      unknown.</p>
  </div>

  <button class="accordion"><b> How long does varicella vaccine last?</b></button>
  <div class="panel">
    <p>After completion of the 2 doses of varicella, several studies have shown that patients vaccinated have antibodies
      towards the disease for about 10 to 20 years. </p>
  </div>

  <button class="accordion"><b> Do you need 2 Varicella vaccines?</b></button>
  <div class="panel">
    <p>Per CDC guidelines, the Varicella vaccines is given in two doses. If you were not vaccinated as a child for this
      vaccines, as an adult,
      you should receive the injections four to eight weeks between the first and second shot.</p>
  </div>

  <button class="accordion"><b>Should I get the chickenpox vaccine?</b></button>
  <div class="panel">
    <p>Being vaccinated is the best way to reduce your chances of getting sick.
      If you haven’t been vaccinated against chickenpox or had the disease as a child, you should get vaccinated.
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