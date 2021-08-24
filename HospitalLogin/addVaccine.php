<?php
session_start();

include '../dbconnect.php';


	$res = pg_query($conn, "SELECT vid from vaccine where vname = '$_POST[vaccineList]'");
	while ($row = pg_fetch_row($res)) {
     $vid = $row[0];
     } 
     $res1 = pg_query($conn, "SELECT * from hospital_vaccine where vid=$vid and hospital_vaccine.email = '$_SESSION[hemail]'");
	if(pg_num_rows($res1)>0)
	{
		
		$_SESSION['form']['status']   = "WARNING";
        $_SESSION['form']['message']  = " $_POST[vaccineList] vaccine is already in your stock ";
     
	 header('location: AvailableVaccines.php');
	}


	else if(pg_num_rows($res)>0)
	{
	$sql = "INSERT into hospital_vaccine  values('$_SESSION[hemail]','$vid',0)";
	 
	 if (pg_query($conn, $sql)) {
   		
     	$_SESSION['form']['status']   = "SUCCESS";
        $_SESSION['form']['message']  = "Added  : $_POST[vaccineList] vaccine is added in your stock ";
     
	 header('location: AvailableVaccines.php');
 	}
	
	else {
    echo "Somethin Went Wrong ";
    
	}
}
?>
