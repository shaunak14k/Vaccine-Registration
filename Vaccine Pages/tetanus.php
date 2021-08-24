<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teatanus Vaccine</title>
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
    <h1>TDAP (Tetanus, Diphtheria, Pertussis) </h1><br>

    <p>Vaccine Door offers every vaccine available in the India including Tdap (Tetanus, Diphtheria, Pertussis) vaccine.
      <br>
      We offer a wide array of employee health,student health, travel health, and laboratory services to individuals,
      schools, corporations, and other health care organizations.<br>
      We offer same day or next day appointments and allow you to book your appointments online!
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
        <h3>What is it?</h3>
        <br>
        <p>Tetanus is a bacterial disease that is caused by a toxin produced by Clostridium tetani.
          The bacteria lives in the soil. It can be spread through a cuts, abrasions, punctures, burns or other breaks
          in the skin.
          Diphtheria is also a bacterial disease that is caused by Corynebacterium diphtheria.
          This bacteria is spread person to person through oral or respiratory droplets and/or close contact with an
          infected person.
          Sometimes in countries where it has warmer climates there is transmission through discharge from skin
          lesions.
          Pertussis is also known as "Whooping Cough." Pertussis is highly contagious and is caused by the bacteria
          Bordetella pertussis.
          It is also spread from person to person through methods like coughing, sneezing, or contact with the
          respiratory secretions.
      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
        <br>

        <p> Tetanus symptoms include stiff neck or jaw muscles, unable to relax your muscles which become tight and
          painful,difficulty breathing and swallowing, irritability, sweating, fast heartbeat, fever, and painful muscle
          spasms.
          <br><br>

          Serious complications of Tetanus include:
          <br>
          Breathing problems, Seizure-like activity, Severe nervous system disorders and Death.
          <br><br>
          Diphtheria symptoms include a sore throat, hoarseness, difficulty swallowing, fever, nasal drainage, and
          thick gray pseudo-membrane that attaches tightly to the tissue where it is formed. The membrane can extend
          into
          different parts of the respiratory tract and lead to respiratory problems, aspiration, suffocation, or death.
          <br>

        </p>
        <br>
        Serious complications of Pertussis include: <br>
        Pneumonia , Hemorrhage of the eye , Abdominal hernia , Fracture of ribs , rinary incontinence , Back strain ,
        Brain Hemorrhage , Stroke.

        <br><br>
        <p>Infants and young children have the highest morbidity and mortality.
          The group who has a higher risk of infection that will have complications especially include newborns,
          adults, pregnant women, and people who have a compromised immune system.</p>
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>



    <div class="head2">

      <h1>Recommended for?</h1>
      <br><br>
      <p style="text-align: center; font-size: 16px;">
        Tetanus and Pertussis occur anywhere in the world and Pertussis in particular remains a very poorly controlled but vaccine-preventable disease. There has been <br>a resurgence as the vaccine wears off over time. Everyone eligible to have the vaccine should be vaccinated. This is a routine childhood vaccine called Dtap and booster<br> shots should be given to adults every 10 years with TdaP. It is important for travelers to be up to date due to the increased risk for diphtheria in <br>developing countries and risk for pertussis is worldwide. If you have an injury that results in a bad wound, you should have a tetanus shot within 5 years.
        <br><br><br><br><br>
      </p>
    </div>
    <!---=========================================================================-->


    <a href="#" class="push_button"> Book Appointment</a>


    <br><br><br><br>




    <!----==========FAQ========================-->

    <h1 style="text-align: center;">Frequently Aksed Questions</h1>
    <br><br><br>
    <hr>

    <br><br><br><br>

    <button class="accordion"><b> Will it harm me to get the Tetanus vaccine again?</b></button>
    <div class="panel">
      <p> It's usually OK to receive an extra booster of the tetanus vaccine. This is especially true if you're being
        treated for an acute injury, such as a deep cut or puncture wound.
      </p>
    </div>

    <button class="accordion"><b>Is the tetanus vaccine safe during pregnancy?</b></button>
    <div class="panel">
      <p>Tetanus vaccine is safe to give during pregnancy.</p>
    </div>

    <button class="accordion"><b> What is the schedule for tetanus vaccine for adults?</b></button>
    <div class="panel">
      <p> The 3-dose primary series should begin as early as 6 weeks of age, with subsequent doses given with a minimum
        interval of 4 weeks between doses.
        The 3 booster doses should preferably be given during the second year of life (12–23 months), at 4–7 years of
        age, and at 9–15 years of age.</p>
    </div>

    <button class="accordion"><b> Can the tetanus vaccine be given at the same time as other vaccines?</b></button>
    <div class="panel">
      <p>It is safe to receive the Shingrix (shingles) and tetanus vaccines at the same time.</p>
    </div>

    <button class="accordion"><b> How long does Tetanus vaccine last?</b></button>
    <div class="panel">
      <p>After the initial tetanus series, booster shots are recommended every 10 years.
        If you experience a puncture wound, it's best to get the booster shot regardless of when you had your last
        tetanus shot.
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