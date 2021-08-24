<?php
session_start();
include '../dbconnect.php';

	$sql = "UPDATE  hospital_vaccine set price=$_POST[price] WHERE vid=(select hospital_vaccine.vid from vaccine,hospital_vaccine where vname = '$_POST[vname]' and vaccine.vid = hospital_vaccine.vid)";
	 
	 if (pg_query($conn, $sql)) {
   		
     	$_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']  = "'$_POST[vname]' Vaccine Price changed to Rs.'$_POST[price]' ";
       
     header('location: Price.php');
 	}
	
	else {
    echo "Something Went Wrong " . pg_error($conn);
    header('location: Price.php');
	}

?>