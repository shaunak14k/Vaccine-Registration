<?php
session_start();
include '../dbconnect.php';
$cnt = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta Vaccine="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Available Vaccines</title>
  <link rel="stylesheet" href="index2.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

</head>
<style>

.abv{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.abv{
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
  table {
    width: 750px;
    border-collapse: collapse;
    margin: 50px auto;
  }

  /* Zebra striping */
  tr:nth-of-type(odd) {
    background: #eee;
  }

  th {
    background: #3498DB;
    color: white;
    font-weight: bold;
  }

  td,
  th {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    font-size: 18px;
  }

  /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
  @media only screen and (max-width: 760px),
  (min-device-width: 768px) and (max-device-width: 1024px) {

    table {
      width: 100%;
    }

    /* Force table to not be like tables anymore */
    table,
    thead,
    tbody,
    th,
    td,
    tr {
      display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      border: 1px solid #ccc;
    }

    td {
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:before {
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 6px;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      /* Label the data */
      content: attr(data-column);

      color: #000;
      font-weight: bold;
    }

  }

  
  .avb {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }

  .avb:hover{

    background-color: lightgreen;
  }
  .avb {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
  }
</style>

<body>
  <!----============================= Header===============================================-->
  <header>
    <nav>
      <img class="logo" src="logo.png" alt="logo img" />
      <ul>
        <li><a href="Dashboard.php">DASHBOARD</a></li>
        <li><a href="AppointmentDetails.php">APPOINTMENT DETAILS</a></li>
        <li><a href="AvailableVaccines.php">AVAILABLE VACCINES</a></li>
        <li><a href="Price.php">PRICE</a></li>
        <li><a href="Contactus.html">CONTACT</a></li>
        <li><a href="Profile.php">PROFILE</a></li>
        <li><a href="../logout.php">LOG OUT</a></li> 

      </ul>
    </nav>
  </header>
  <!----============================= End of Header===============================================-->
  <br /><br>

  <h1>Available Vaccines </h1><br><br>
<div>
  <h3> <CENTER><?php include '../login_messages.php'; ?></CENTER> </h3>
</div>


  <table>
    <thead>
      <tr>
        <th>Sr.</th>
        <th>Vaccine</th>
        <th>#</th>


      </tr>
    </thead>
    <tbody>
       <tr>
     <td></td>
     <form action="addVaccine.php" method=POST>
    <td><label for="vaccine">Choose a Vaccine:</label>
  <select  name="vaccineList">
    <option disabled selected>-- Select Vaccine --</option>
    <?php
    $res1 = pg_query($conn,"SELECT vname from vaccine");
       while ($row = pg_fetch_row($res1)) {
     echo"<option value='$row[0]'>".$row[0]."</option>";
     } 
    ?>
  </select></td>
  
   <td> <input type="submit" value="ADD"></td>
 
  </tr>
   </form>
      <?php 

    $result = pg_query($conn,"SELECT vaccine.vname from hospital_vaccine,vaccine where hospital_vaccine.email='$_SESSION[hemail]' and vaccine.vid=hospital_vaccine.vid");
    if (pg_num_rows($result) > 0) {
       while( $row = pg_fetch_assoc($result)) {
        
              $cnt++;
            echo "<tr>";
            echo "<td>$cnt</td>";
            
             echo "<td> ".$row['vname']."</td>"; ?>
             <td><a href="delete.php?vname=<?php echo $row["vname"]; ?>">Delete</a></td>

                        
            <?php echo "</tr>";
      }
    }
    ?>
    </tbody>
  </table>

  <script>
    function myFunction(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("vaccine").deleteRow(i);
    }

    function myFunction1() {
      var table = document.getElementById("vaccine");
      var row = table.insertRow(1);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      cell1.innerHTML = "VaccineA";
      cell2.innerHTML = "Delete";
    }
  </script>




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
            <a href="Dashboard.php">Dashboard</a><br />
            <a href="AppointmentDetails.php">Appointment Details</a> <br />
            <a href="AvailableVaccines.php">Available Vaccines</a> <br />
            <a href="Price.php">Price</a><br />
            <a href="Contactus.html">Contact Us</a><br />


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