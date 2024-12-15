<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
$user = $_POST['email'];
$pass= $_POST['password'];
$sql = "SELECT * FROM user_info WHERE email = '$user'";
$i = NULL;

if($result = mysqli_query($conn, $sql))
{
  while($row = mysqli_fetch_assoc($result)) {
    $i++;
    $GLOBALS['pas'] = $row['password'];
    $GLOBALS['id'] = $row['id'];
    $GLOBALS['st'] = $row['Status'];
    echo $GLOBALS['pass'];
  }
  if($i==1)
  {
    if($pass == $GLOBALS['pass'])
    {
      $_SESSION['user_id']=$GLOBALS['id'];
      $_SESSION['stat']=$GLOBALS['st'];
   
      if($_SESSION['stat']==1)
      {
        header('location:admin.php');
      }
      else {
        header('location:index.php');
      }
    }
    else
    {
      echo "no";
    }
  }
}
mysqli_close($conn);

}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>ίριδα</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="bg-img">


   <form action="" method="POST" class="containerform">
      <h3>Sign In Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder=" Enter your email">
      <input type="password" name="password" required placeholder=" Enter your password"> <br>
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="registerform.php">register now</a></p>
   </form>
</div>

<?php include("footer.php"); ?>
</body>
</html>