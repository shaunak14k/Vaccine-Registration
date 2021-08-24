<?php 
session_start();
include 'dbconnect.php';
if(isset($_POST['submit']))
{
   if($_POST['submit'] == 'Login')
   {

      $username = $_POST['username'];
      $password = $_POST['password'];
      $res = pg_query($conn, "SELECT * FROM beneficiary WHERE id = '".$username."' AND password = '".$password."'");
      $numrows =  pg_num_rows($res);
      if($numrows > 0)
      {
        $_SESSION['username']  = $username;
        
     
        $_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']  = "You have logged in successfully.";
        header('location: home.php');
        exit;
      }
      else
      {

        $_SESSION['form']['status']   = "ERROR";
        $_SESSION['form']['message']  = "Unable to logged in. Please check username and password.";
        header('location: LoginPage.php');
        exit; 
        
      } 
    }

   else if($_POST['submit'] == 'Hospital Login')
   {
      $email= $_POST['cid'];
      $password = $_POST['password'];
      $res = pg_query($conn, "SELECT * FROM center WHERE email = '".$email."' AND password = '".$password."'");
      $numrows =  pg_num_rows($res);
      if($numrows > 0)
      {
        $_SESSION['hemail']  = $email;
       
        $_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']  = "You have logged in successfully.";
        header('location: HospitalLogin/Dashboard.php');
        exit;
      }
      else
      {
        $_SESSION['form']['status']   = "ERROR";
        $_SESSION['form']['message']  = "Unable to login! Please check email and password";
        header('location: LoginPage.php');
        exit; 
        
      } 
    
   }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="icon" href="asset/img/favicon.png" type="image/ico">
   <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </head>


  <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    
    
    
.logo {
  display: inline-flexbox;
    cursor: pointer;
    width: 220px;
    height: 70px;
    justify-items: left;
}*{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    html,body{
      display: grid;
      height: 100%;
      width: 100%;
      place-items: center;
      /* background: -webkit-linear-gradient(left, #7CFC00, #008000);
       */
       background-image: url("bg.jpg");

/* Full height */
/* height: 100%;  */

/* Center and scale the image nicely */
/* background-position: center;
background-attachment: fixed;*/
background-repeat: no-repeat;
background-size: 100%;
}
    
    ::selection{
      background: #7CFC00, #008000;
      color: #fff;
    }
    .wrapper{
      overflow: hidden;
      max-width: 400px;
      background: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
    }
    .wrapper .title-text{
      display: flex;
      width: 200%;
    }
    .wrapper .title{
      width: 50%;
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    .wrapper .slide-controls{
      position: relative;
      display: flex;
      height: 70px;
      width: 100%;
      overflow: hidden;
      margin: 30px 0 10px 0;
      justify-content: space-between;
      border: 1px solid lightgrey;
      border-radius: 5px;
    }
    .slide-controls .slide{
      height: 100%;
      width: 100%;
      color: #fff;
      font-size: 18px;
      font-weight: 700;
      text-align: center;
      line-height: 48px;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
    }
    .slide-controls label.signup{
      color: #000;
    }
    .slide-controls .slider-tab{
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      z-index: 0;
      border-radius: 5px;
      background: -webkit-linear-gradient(left, #32CD32, #32CD32);
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    input[type="radio"]{
      display: none;
    }
    #signup:checked ~ .slider-tab{
      left: 50%;
    }
    #signup:checked ~ label.signup
    {
      color: #fff;
      cursor: default;
      user-select: none;
    }
    #signup:checked ~ label.login
    {
      color: #000;
    }
    #login:checked ~ label.signup
    {
      color: #000;
    }
    #login:checked ~ label.login
    {
      cursor: default;
      user-select: none;
    }
    .wrapper .form-container{
      width: 100%;
      overflow: hidden;
    }
    .form-container .form-inner{
      display: flex;
      width: 200%;
    }
    .form-container .form-inner form{
      width: 50%;
      transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    }
    .form-inner form .field{
      height: 50px;
      width: 100%;
      margin-top: 20px;
    }
    .form-inner form .field input{
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 15px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      border-bottom-width: 2px;
      font-size: 17px;
      transition: all 0.3s ease;
    }
    .form-inner form .field input:focus{
      border-color:  #008000;
      /* box-shadow: inset 0 0 3px #fb6aae; */
    }
    .form-inner form .field input::placeholder{
      color:  #008000;
      transition: all 0.3s ease;
    }
    form .field input:focus::placeholder{
      color:  #008000;
    }
    .form-inner form .pass-link{
      margin-top: 5px;
    }
    .form-inner form .signup-link{
      text-align: center;
      margin-top: 30px;
    }
    .form-inner form .pass-link a,
    .form-inner form .signup-link a{
      color:  #008000;
      text-decoration: none;
    }
    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover{
      text-decoration: underline;
    }
    form .btn{
      height: 50px;
      width: 100%;
      border-radius: 5px;
      position: relative;
      overflow: hidden;
    }
    form .btn .btn-layer{
      height: 100%;
      width: 300%;
      position: absolute;
      left: -100%;
      background: -webkit-linear-gradient(right, #7CFC00, #008000,#228B22,#ADFF2F);
      border-radius: 5px;
      transition: all 0.4s ease;;
    }
    form .btn:hover .btn-layer{
      left: 0;
    }
    form .btn input[type="submit"]{
      height: 100%;
      width: 100%;
      z-index: 1;
      position: relative;
      background: none;
      border: none;
      color: #fff;
      padding-left: 0;
      border-radius: 5px;
      font-size: 20px;
      font-weight: 500;
      cursor: pointer;
    }</style>
  <body>




     <!----=================== Header===============================-->
     <header>
    <img class="logo" src="asset/img/logo.png" alt="logo"/>

    <!-- <nav>
	
      <ul class="navlinks">
        <li><a href="index.html">HOME</a></li>
        <li><a href="aboutUs.html">ABOUT</a></li>
        <li><a href="VaccineDetails\vaccinenames.html">SERVICES</a></li>
        <li><a href="contactUs.html">CONTACT</a></li>
        <li><a href="beneficiary_form.html">MAKE AN APPOINTMENT</a></li>

        <!-- <li>
          <button class="button" style="vertical-align:middle"><span> LOGIN </span></button>
          </li> -->
        <!-- <li><a href="#login">LOGIN</a></li>
        <li><a href="#SIGNUP">SIGN UP</a></li>
        <!-- <div class="dropdown"> -->
            <!-- <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div> --> 
      <!-- </ul>
    </nav> -->
  </header>

  <br><br>
  <!----========== End of Header==========-->
    <div class="wrapper">
      <?php include 'login_messages.php'; ?>
      <br>
      <div class="title-text">
			<div class="title login">User Login</div>
			<div class="title signup">Hospital Login</div>
	  </div>
	  <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">User Login</label>
          <label for="signup" class="slide signup">Hospital Login</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="LoginPage.php" class="login" method="POST">
				<div class="field">
					<input type="text" placeholder="User ID" name="username" required>
				</div>
				<div class="field">
					<input type="password" placeholder="Enter Password" name="password" required>
				</div>
				<div class="pass-link">
				<a href="forgot_password.php">Forgot password?</a></div>
				<div class="field btn">
				<div class="btn-layer">
			</div>
				<input type="submit" value="Login" name="submit">
				</div>
				<div class="signup-link">
				Not a member? <a href="user_registration.php">Create Account</a></div>
				</form>
				<form action="LoginPage.php" class="signup" method="POST">
				<div class="field">
				<input type="text" placeholder="Hospital ID" name="cid" required>
				</div>
				<div class="field">
				<input type="password" placeholder="Enter password" name="password" required>
				</div>
        <div class="pass-link">
        <a href="forgot_password.php">Forgot password?</a></div>
				<div class="field btn">
				<div class="btn-layer">
				</div>
			    <input type="submit" value="Hospital Login" name="submit">
                </div>
                <div class="signup-link">
        Not a member? <a href="hospital_registration.php">Create Account</a></div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form.signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

</body>
</html>