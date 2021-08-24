<?php
print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Appointment Details</title>
  <link rel="stylesheet" href="index2.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<link rel="icon" href="favicon.png" type="image/ico">

   <style>
      .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }

      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
      }

      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }

      .invoice-box table tr td:nth-child(2) {
        text-align: right;
      }

      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }

      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }

      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }

      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }

      .invoice-box table tr.item.last td {
        border-bottom: none;
      }

      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }

      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }

        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }

      /** RTL **/
      .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      }

      .rtl table {
        text-align: center;
      }

      .rtl table tr td:nth-child(2) {
        text-align: center;
      }

      @media print {
  body * {
    visibility: hidden;
  }
  .invoice-box, .invoice-box * {
    visibility: visible;
  }
  .invoice-box {
    position: absolute;
    left: 0;
    top: 0;
  }
}
    </style>
 </head>
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
<div align="center">
  <span><button onclick="window.print()">Print Receipt</button></span>
</div>
<br>
    <div class="invoice-box">
      <table cellpadding="0" cellspacing="0">
        <tr class="top">
          <td colspan="5">
            <table>
              <tr>
                <td class="title">
                  <img src="asset/img/logo.png" style="width: 100%; max-width: 200px" />
                </td>

                <td>
                  Invoice #: 123<br />
                  Created: January 1, 2021<br />
                  Due: January 1, 2021
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <tr class="information">
          <td colspan="5">
            <table>
              <tr>
                <td>
                  Sancheti, Shivaji Nagar.<br />
                  12345 Karve Road<br />
                  B-Square, Pune
                </td>

                <td>
                  Name: Akash Shirude.<br />
                  Age: 56<br />
                  9309756891
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <tr class="heading">
          <td>Payment Method</td>
          <td></td>
          <td></td>
          <td></td>
          <td>Check #</td>
        </tr>

        <tr class="details">
          <td>Check</td>
           <td></td>
          <td></td>
          <td></td>
          <td>Paid</td>
        </tr>

        <tr class="heading">
          <td>Vaccine</td>
          <td>Price</td>
          <td>SGST</td>
          <td>CGST</td>
          <td>Total</td>
        </tr>

        <tr class="item">
          <td>Polio</td>
          <td>₹1700</td>
          <td>₹153</td>
          <td>₹153</td>
          <td>₹2006</td>
        </tr>


        <tr class="total">
          <td></td>

          <td>Total: ₹2006.00</td>
        </tr>
      </table>
    </div>


    <!-- ======= Footer  ======= -->
    <footer>
      <div class="main-content">
        <div class="left box">
          <!-- <img src="img\logo.png" class="Footerlogo" ; /> -->

          <h2>VaccineDoor</h2>
          <div class="content">
            <p>
              A108 Adam Street <br />
              NY 535022, USA
            </p>

            <br />

            <p>
              Phone: +1 5589 55488 55 <br />
              Email: info@example.com
            </p>
          </div>
        </div>

        <div class="center box">
          <h2>Useful Links</h2>
          <div class="content">
            <div class="links">
              <a href="#home">HOME</a> <br />
              <a href="#about">About Us</a> <br />
              <a href="#search">Services</a> <br />
              <a href="#search">How it Works</a><br />
              <a href="#search">Contact Us</a><br />
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Our Newsletter</h2>
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
        <center>
          <span>2021 &copy VaccineDoor All rights reserved.</span>
        </center>
      </div>
    </footer>
    <!-- ======= End of Footer ======= -->
    
  </body>
</html>
