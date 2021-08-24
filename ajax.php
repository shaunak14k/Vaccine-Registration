<?php 
include 'dbconnect.php';
$vaccineID = $_POST['vaccineID'];

// echo "<option>Select Category</option>";
$res= pg_query($conn,"SELECT cname,hospital_vaccine.email from hospital_vaccine,center,vaccine WHERE hospital_vaccine.vid = '$vaccineID' and hospital_vaccine.email=center.email and hospital_vaccine.vid=vaccine.vid"); 
$arr_center = [];
if($res)
{
	while ($row = pg_fetch_assoc($res)) 
	{
		$arr_center[] = 	$row;
	}

}

echo json_encode($arr_center);


        /*while($data=mysqli_fetch_array($res))
        {
        echo "<option value='".$data['id']."'>".$data['subcategory_name']."</option>";
        }*/

        // echo json_encode($arr_temp);
?>