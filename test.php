
<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>

<form>
	<?php
	$center = "Sahyadri Hospitals";
        ?>
  City:
  <select>
    <option disabled selected>-- Select City --</option>
    <?php
        include "dbconnect.php";  // Using database connection file here

          $cdata =   pg_query($conn, "SELECT email FROM center WHERE cname = '".$center."'") or die("cdata Error");
        $records = pg_query($conn, "SELECT vname From vaccine");  // Use select query here 

        while($data = pg_fetch_array($records))
        {

            echo "<option value='". $data['vname'] ."'>" .$data['vname'] ."</option>";  
            	// displaying data in option menu
        }	
        
    ?>  
  </select> <?php
  while($data1 = pg_fetch_array($cdata))
        {
        		
            $cemail = $data1['email'];
            echo "$cemail";
        } ?>
</form>

<?php pg_close($conn);  // close connection ?>

</body>
</html>