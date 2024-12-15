<?php

include ("config.php");

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));


   $result = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '$email' && password = '$pass'") or die('query failed');

   if(mysqli_num_rows($result) > 0){
      echo 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user_info`(name, email, password) VALUES('$name', '$email', '$pass')") or die('bad query');
      echo'registered successfully!';
      header('location:signin.php');
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
<?php include("header.php") ?>
<div class="bg-img">

   <form action="" method="post" class="containerform">
      <h3>Register Now</h3>
      <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
      <input type="text" name="name" required placeholder=" Enter your name">
      <input type="email" name="email" required placeholder=" Enter your email">
      <input type="password" name="password" required placeholder=" Enter your password">
      <input type="password" name="cpassword" required placeholder=" Confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="signin.php">login now</a></p>
   </form>

</div>
<?php include("footer.php") ?>
</body>
</html>