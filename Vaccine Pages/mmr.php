<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MMR Vaccine</title>
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

    <h1>MMR Vaccine </h1><br><br>

    <p>Vaccine Door offers every vaccine available in the India including MMR Vaccine.
      We offer a wide array of employee health, <br>student health, travel health, and laboratory services to
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
        <h3>What is it?</h3>
        <br>
        <p>Measles, mumps, and rubella (MMR) are serious viral infections that spread through the air which makes these
          diseases highly contagious.
          They are especially prevalent in areas where people are in close contact and experiences resurgences when
          vaccination rates drop.
          MMR vaccine protects you from all three diseases.</p>

      </div>
    </div>

    <div id="parent2">

      <div id="content2">
        <h3>Symptoms</h3>
        <br>
        <p> Symptoms of measles infection includes cough, high fever, rash on the body and inside the mouth, runny nose,
          anorexia, diarrhea,
          swollen lymph nodes, and eye irritation. Pneumonia and acute encephalitis caused by the measles infection is
          the most
          common cause of death in young children and adults. Symptoms of mumps include low-grade fever, headache,
          anorexia, muscle pain, swelling of the glands, and earache, although some cases can be asymptomatic. Mumps may
          also lead to more serious conditions such as meningitis and inflammation of the testicles or ovaries. Rubella,
          also known as Germain Measles, causes rash, low-grade fever, swelling of lymph glands, and arthritis.
          Pregnant women who contract rubella are at an increased risk for miscarriage and serious birth defects.
        </p>
     
      </div>
      <img src="thermometer.svg" alt="i1" />
    </div>

    <div id="parent3">
      <img src="num.svg" alt="i1" /> -
      <div id="content3">
        <h3>Prevalence</h3><br>
        <p>
          Before the vaccine was available, measles infected up to 90% of the population before age 15 and 500 deaths
          were reported annually from measles.
          Since the vaccines release in 1963, the incidence of measles has dropped by more than 98%. Measles has a
          resurgence in 1989-1991 due to lower
          vaccination coverage in school age children. Once vaccine coverage was increased, rates of measles infection
          again decreased.
          Another resurgence occurred in 2008, mostly among school age children who were unvaccinated. Mumps experienced
          a resurgence in 2006 and 2009,
          but was largely contained due to high vaccination rates in the affected communities. Rubella outbreaks
          occurred in California and
          Pennsylvania were reported in 1990-1991. Most cases of rubella are reported from women who live in areas where
          rubella vaccination is not routinely used.
        </p>
        <br>
      </div>
    </div>
  </main>

  <!---=========================================================================-->



  <div class="head2">

    <h1>Recommended for?</h1>
    <br><br>
    <p style="text-align: center; font-size: 16px;">
      Since measles, mumps, and rubella are highly contagious, airborne diseases, it is recommended for young children,
      some school programs, and many international travelers. MMR vaccine is also recommended for:
      <br><br><br><br><br>
    </p>
  </div>

  <div id="row">
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li>All children over 12 months of age.</li> <br>
        <li> Some infants under 12 months of age that are traveling to certain areas overseas.</li><br>

      </ul>
    </div>
    <div class="column" style="background-color:rgba(255, 255, 255, 0.75);">
      <ul>
        <li> Individuals who work in medical facilities. </li><br>
        <li>Individuals that are 18 years of age and older and born after 1956.</li><br>
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

  <button class="accordion"><b>Can the MMR vaccine be given at the same time as other vaccines?</b></button>
  <div class="panel">
    <p> Yes. However, you should wait at least 28 days after taking the MMR vaccine to receive another live vaccine (30
      days for yellow fever).</p>
  </div>

  <button class="accordion"><b>Is the MMR vaccine safe during pregnancy?</b></button>
  <div class="panel">
    <p>It is not recommended that a pregnant woman receive the MMR vaccine. If the vaccine is indicated, she should wait
      to
      receive the vaccine until after delivery.</p>
  </div>

  <button class="accordion"><b>How long after MMR vaccine can side effects occur?</b></button>
  <div class="panel">
    <p>Side effects occur within 2 weeks after receiving the vaccine. </p>
  </div>

  <button class="accordion"><b> What’s in a MMR vaccine?</b></button>
  <div class="panel">
    <p>The combination of 3 live weakened viruses: Measles, mumps, and rubella.</p>
  </div>

  <button class="accordion"><b>How long is the MMR vaccine good for?</b></button>
  <div class="panel">
    <p>Two doses of MMR are recommended for long-lasting protection.
      Revaccination may be needed if you have a laboratory result showing no evidence of immunity for the vaccine.
    </p>
  </div>

  <button class="accordion"><b>What are the side effects of MMR vaccine?</b></button>
  <div class="panel">
    <p>Common side effects of the vaccine are soreness, swelling, and redness at the injection site. Possible, but rare,
      swelling of glands in the cheeks or neck.</p>
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
            <a href="beneficiary_form.html">Book a Vaccine</a><br />
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