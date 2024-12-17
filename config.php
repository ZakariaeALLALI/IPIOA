<?php
$servername = "sql206.infinityfree.com";  
$username = "if0_37936234";  
$password = "DcdhJQDrV5 ";  
$dbname = "if0_37936234_ecom";  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
