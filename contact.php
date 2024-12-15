<?php

include ("config.php");

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);


   $result = mysqli_query($conn, "SELECT * FROM contact WHERE email = '$email' && name = '$name'") or die('query failed');

   if(mysqli_query($conn, "INSERT INTO `contact`(name, email, message) VALUES('$name', '$email', '$message')")){
    echo'messsage sent succesfully!';
   }

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ίριδα</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Poiret+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include("header.php"); ?>

    <section class="contact-page padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Contact us</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.php">Home /</a>
              </span>
              <span class="item">Contact us</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-information bg-grey padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Get in Touch</h2>
            <div class="contact-detail">
              <div class="detail-list">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="list-unstyled list-icon">
                  <li>
                    <i class="icon icon-phone"></i>+1650-243-0000
                  </li>
                  <li>
                    <i class="icon icon-envelope"></i>
                    <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                  </li>
                  <li>
                    <i class="icon icon-location"></i>North Melbourne VIC 3051, Australia
                  </li>
                </ul>
              </div>
              <div class="social-links">
                <h3>Social Links</h3>
                <ul class="d-flex list-unstyled">
                  <li><a href="#" class="icon icon-facebook"></a></li>
                  <li><a href="#" class="icon icon-twitter"></a></li>
                  <li><a href="#" class="icon icon-pinterest-p"></a></li>
                  <li><a href="#" class="icon icon-youtube"></a></li>
                  <li><a href="#" class="icon icon-linkedin"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-information">
              <h2>Send A Message</h2>
              <form name="contactform" action="contact.php" method="post" class="contact-form">
                <div class="form-item">
                  <input type="text" minlength="2" name="name" placeholder="Name" class="u-full-width bg-light" required>
                  <input type="email" name="email" placeholder="E-mail" class="u-full-width bg-light" required>
                  <textarea class="u-full-width bg-light" name="message" placeholder="Message" style="height: 180px;" required></textarea>
                </div>
                <label>
                  <input type="checkbox" required>
                  <span class="label-body">I agree all the <a href="#">terms and conditions</a>
                  </span>
                </label>
                <button type="submit" name="submit" class="btn btn-full btn-medium btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="google-map">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://getasearch.com/fmovies"></a>
          <br>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 500px;
              width: 100%;
            }
          </style>
          <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
          <style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 100%;
            }
          </style>
        </div>
      </div>
    </section>
    <?php include("footer.php"); ?>

  </body>
</html>