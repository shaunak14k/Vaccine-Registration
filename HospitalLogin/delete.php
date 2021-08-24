<?php
session_start();
include '../dbconnect.php';


	$sql = "DELETE FROM hospital_vaccine WHERE vid=(select hospital_vaccine.vid from vaccine,hospital_vaccine where vname = '$_GET[vname]' and vaccine.vid = hospital_vaccine.vid) and hospital_vaccine.email='$_SESSION[hemail]'";
	 
	 if (pg_query($conn, $sql)) {
   		
     	$_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']  = "Deleted : $_GET[vname] you dont have ";
       
     header('location: AvailableVaccines.php');
 	}
	
	else {
    echo "<script>alert('Something Went Wrong')</script> " . pg_error($conn);
    header('location: AvailableVaccines.php');
	}

?>