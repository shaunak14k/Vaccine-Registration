<?php
if(!isset($_SESSION['username']))
{	
	$_SESSION['form']['status']   = "WARNING";
    $_SESSION['form']['message']  = "Login first to schedule your apppointment.";
	header('Location:LoginPage.php');
	exit;
}
else
{
	return true;
}

?>