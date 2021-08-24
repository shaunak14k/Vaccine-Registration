<?php
session_start();
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>VaccineDoor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />


  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="index2.css" />
  <link rel="icon" href="asset/img/favicon.png" type="image/ico">
</head>

<style>
  /* * {box-sizing: border-box;}
  body {font-family: Verdana, sans-serif;}
  .mySlides {display: none;}
  img {vertical-align: middle;} */
  
  /* Slideshow container */
  /* .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  } */
  
  /* Caption text */
  .text {
    /* color: #f2f2f2; */
    font-size: 15px;
    /* padding: 8px 12px; */
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    /* padding: 8px 12px; */
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
 
  
  .active {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.0s;
  }
  
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
  </style>

<body>

  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <li><a href="Home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</li>
        <li><a href="Vaccine Pages/Service.php">SERVICES</a></li>
        <li><a href="Contactus.php">CONTACT</a></li>
        <li><a href="Beneficiary_form.php">MAKE AN APPOINTMENT</a></li>
        <li><a href="Profile.php">PROFILE</a></li>
        <li><a href="logout.php">LOG OUT</a></li>

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

  <!-- <img class="girl" src="girl.jpg" /> -->


<h1>Virtual Healthcare when you need it the most!</h1>
<h1>For Anyone, anywhere at anytime!</h1><br>
<div>
  <h3> <CENTER><?php include 'login_messages.php'; ?></CENTER> </h3>
</div>
<br>
  <div class="slideshow-container">
  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="slide-1.jpg" style="width:100%">
   
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="slide-2.jpg" style="width:100%">
  
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="slide-3.jpg" style="width:100%">
  
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="slide-4.jpg" style="width:100%">
  
  </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>
  
  <script>
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>
    



  <!----========== Container==========-->

  <div class="container">
    <div class="boxes">
      <h4 class="title"><a href="">Physical</a></h4><br>
      <p class="description">
        Our physicals are performed by Board Certified Clincians who can often
        perform a physical within the same day or next day of your request.
      </p>
    </div>

    <div class="boxes">
      <h4 class="title"><a href="">Travel Medicines</a></h4><br>
      <p class="description">
        Vaccine Door provides individualized service for you on what travel
        vaccines and prescriptions are recommended for your trip.
      </p>
    </div>

    <div class="boxes">
      <h4 class="title"><a href="">Vaccine Services</a></h4><br>
      <p class="description">
        If you need vaccines that come in a series, we schedule all follow up
        doses in advance. We even send you an email reminder when your next
        vaccine is due!
      </p>
    </div>

    <div class="boxes">
      <h4 class="title"><a href="">Lab Services</a></h4><br>
      <p class="description">
        All our laboratory tests are drawn in office. This provides our
        clients the convenience of having their consultation, vaccination and
        laboratory testing all at the same location.
      </p>
    </div>
  </div>

  <!----========== End of Container==========-->

  <!----==========Belt========================-->

  <div class="belt">
    <h4>
      <br />In an emergency? Need help now?
      <p class="description">
        ODuis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
      </p>
      <button class="belt-btn"><strong>Make an Appointment</strong></button>

      <br /><br />
    </h4>
  </div>
  <!----==========End of Belt========================-->
  
 <!----===========How it works========================-->

 <a href="how">
  <h1 style="text-align: center;">HOW IT WORKS?</h1>
</a>

<div class="how">
  <div class="boxo">

    <!-- <h4 class="title"><a href="">Choose a Plan</a></h4> -->
    <h4>Choose a Plan</h4><br>
    <p class="description">
      Our physicalsperform a physical within the same day or next day of your request.
    </p><br><br><br>


    <h4>Book a Session</h4><br>
    <p class="description">
      Vaccine Door provides individualized service for you on what travel
      vaccines and prescriptions are recommended for your trip.
    </p><br><br><br>
    <!-- </div>

    <div class="boxo"> -->
  <!--   <h4 class="title"><a href="">Make Payments</a></h4>
    <p class="description">
      If you need vaccines that come in a series, we schedule all follow up
      doses in advance. We even send you an email reminder when your next
      vaccine is due!
    </p><br> -->
    <!-- </div>

      
    <div class="boxo"> -->
      <h4>Get Vaccinated!</h4><br>
    <p class="description">
      If you need vaccines that come in a series, we schedule all follow up
      doses in advance. We even send you an email reminder when your next
      vaccine is due!
    </p><br><br><br>
  </div>

  <div class="boxo"><img src="asset/img/features.jpg" height="420px" width="650px"></div>


</div>


<!----===========How it works========================-->

<!----==========Testimonials========================-->
<h1>TESTIMONIALS</h1>
<div class="slideshow-container">

  <div class="mySlides">
    <q>The staff at VaccineDoor are very friendly, courteous, and professional. I was a walk in appointment and
      they were able to accommodate my needs right away. I was contacted immediately when my lab results
      were returned in order to finish my appointment. I would return to VaccineDoor for all of my future
      medical needs</q>
    <p class="author">- Akshar Pathak</p><br>

    <img class="feedback" src="asset/img/testimonials/testimonials-1.jpg">

  </div>

  <div class="mySlides">
    <q> I was here for a total of 1 hour and my appt was comforting and quick. The staff was very helpful and nice. I
      would recommended my family and friends to VaccineDoor. Thanks again.</q>
    <p class="author">- Ishita Sudha Yashvi</p><br>


    <img class="feedback" src="asset/img/testimonials/testimonials-2.jpg">

  </div>

  <div class="mySlides">
    <q>Whenever traveling overseas, we always get immunization advise and shots early from VaccineDooron Rainbow in
      Las Vegas.
      The entire staff is very helpful and we get current advise on how to prepare for the area we are going to. Well
      worth the price which is reasonable.</q>
    <p class="author">- Tushar G.</p><br>


    <img class="feedback" src="asset/img/testimonials/testimonials-3.jpg">
  </div>


  <div class="mySlides">
    <q>The website was easy to schedule. The staff was really nice. I was in and out quickly with my appointment.
      Thank you!</q><br><br>
    <p class="author">- Priyanka Khadse</p><br>

    <img class="feedback" src="asset/img/testimonials/testimonials-4.jpg">

  </div>


  <div class="mySlides">
    <q>They made it all very easy to access services. Affordable. Everyone was very friendly. Took my sister in the
      following week.he wait was short despite the provider that met with me explained everything in great
      detail.Pricing was very fair for a cash visit. I will continue to come here for all my future travel
      vaccinations.</q><br>
    <p class="author">- Vrsihank Khanna</p><br>


    <img class="feedback" src="asset/img/testimonials/testimonials-5.jpg">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>
<br><br><br>
<!----==========Testimonials========================-->

<!----==========FAQ========================-->
<h1>VACCINEDOORS FREQUENTLY ASKED QUESTIONS</h1>
<br><br><br><br>

<button class="accordion">Do I need an appointment</button>
<div class="panel">
  <p> Appointments are needed for certain services with a Doctor or Clinician such as travel consultation, physical
    examinations, rabies consultations, vaccine review, immigration medical examinations, and STD consultation and
    treatment. For our other services such as TB skin testing, vaccines, laboratory testing and drug testing an
    appointment is highly recommended but walk ins are accepted during office hours.</p>
</div>

<button class="accordion"> I have had vaccines in the past, do these expire after certain period of time?</button>
<div class="panel">
  <p> There are some vaccines that are lifelong if you have completed the series appropriately. There are other
    vaccines that should be followed by booster doses periodically, depending on the vaccine and the situation. e7
    Health can review your vaccine records prior to administering vaccines to determine what is recommended for you.
  </p>
</div>

<button class="accordion">If I receive a vaccine that has multiple doses, will I be charged administration fees for
  each dose? </button>
<div class="panel">
  <p> VaccineDoor does not charge an administration fee for any vaccines however if you are receiving vaccines that
    come in a series, the fee for the vaccine is per dose.</p>
</div>

<button class="accordion">Do you accept Insurance?</button>
<div class="panel">
  <p> VaccineDoor accepts Cash, Visa, MasterCard, Discover, or American Express. We do not accept checks or insurance.
    However, we provide an itemized receipt containing all the information you will need to submit to your insurance
    company for reimbursement. We cannot guarantee your insurance company will reimburse you for any vaccination. Many
    health insurers, including Medicare, believe that travel is by choice, and costs associated with travel medicine
    should be the responsibility of the individual. Some medications and immunizations may be covered under some
    circumstances. You will need to check with your insurance to determine if and what they cover.</p>
</div>


<button class="accordion">Why do I need a consultation for travel Vaccines?</button>
<div class="panel">
  <p> It is important to meet with a Travel Medicine Specialist prior to having travel vaccines for several reasons.
    Even if you believe you already know what vaccines you need for travel, the consultation will provide you with
    health advice tailored to your specific itinerary details. In addition to vaccines, there may be prescriptions
    recommended for your itinerary and these can be prescribed during the same visit. Many vaccines are not 100%
    preventative and this is why discussing food and water precautions, insect precautions, and other safety concerns
    are such an important aspect of pre-travel preparation.
  </p>
</div>



<button class="accordion">Are there any discounts for students? </button>
<div class="panel">
  <p> Yes.
    We offer student discounts (with student ID) for school vaccines.
    We can review a student’s vaccination records and offer ONLY the vaccines needed based on the school’s
    requirements which can help save time and money.
    Our Titer prices are up to 50% lower than most labs.
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
<!----==========FAQ========================-->
<!----==========Contact Us========================-->

<!-- 
<div class="contact">
  <div style="text-align:center"><br>
    <a href="how">
      <h2 style="text-align: center;">CONTACT US</h2> <br>
    </a>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
    <br>
    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=swargate%20pune+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
        href="https://www.maps.ie/route-planner.htm"></a></div>
  </div>


  <div class="row">
    <div class="column">
      <br>
-->

<!-- <img src="asset/img/add.png " style="height: 50px; margin: 40px;    width: 50px;"> -->
<!-- <h3 style="align-items: center; margin: 40px;color: green;">Our Address</h3>
      <p style="margin: 40px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eveniet cum sed
        deserunt architecto, perferendis ea corrupti vero quod explicabo nobis alias. Fugiat hic doloremque est,
        ducimus quos alias temporibus nemo officiis aliquid ad nisi quis recusandae adipisci blanditiis. Suscipit
        delectus dolore voluptas tempore unde ad modi magni explicabo enim.</p>

      <h3 style="align-items: center; margin: 40px;color: green;">Contact Us</h3>
      <p style="margin: 40px;">info@example.com <br> +1 5589 55488 55</p>


    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname"> </label>
        <input type="text" id="fname" name="fname" placeholder="Your First name">
        <label for="lname"></label>
        <input type="text" id="lname" name="lname" placeholder="Your Last name"> -->
<!-- <label for="country">Country</label>F -->


<!--        
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select> -->

<!-- <label for="subject"></label>
        <textarea id="subject" name="subject" placeholder="Subject" style="height:160px"></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div> -->




<!----==========Contact Us========================-->

<div class="text"></div>



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

</body>

</html>


