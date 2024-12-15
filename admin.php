<?php

include ("config.php");

session_start();

if($_SESSION['stat']==0){
   header('location:index.php');
}
else {
   if(isset($_POST['add_product'])){

      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_FILES['product_image']['name'];
      $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   
      if(empty($product_name) || empty($product_price) || empty($product_image)){
         $message[] = 'please fill out all';
      }else{
         $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
         $upload = mysqli_query($conn,$insert);
         if($upload){
            $message[] = 'new product added successfully';
         }else{
            $message[] = 'could not add the product';
         }
      }
   
   };
   
   if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      mysqli_query($conn, "DELETE FROM `products` WHERE `products`.`id`= $id");
      header('location:admin.php');
   };
   
   ?>
   
   
   <!DOCTYPE html>
   <html lang="en">()
   <head>
       <title>ίριδα - add product</title>
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
   
   <?php
   include("header.php");
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
   
   ?>
    <div class="flex">
         <a href="signin.php?logout=<?php echo '$admin_id'; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
      </div>
      
   <div class="container">
   
      <div class="admin-product-form-container">
   
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>add a new product</h3>
            <input type="text" placeholder="enter product name" name="product_name" class="box">
            <input type="number" placeholder="enter product price" name="product_price" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="submit" class="btn" name="add_product" value="add product">
         </form>
   
      </div>
   
      <?php
   
      $select = mysqli_query($conn, "SELECT * FROM products");
      
      ?>
      <div class="product-display">
         <table class="product-display-table">
            <thead>
            <tr>
               <th>product image</th>
               <th>product name</th>
               <th>product price</th>
               <th>action</th>
            </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td>$<?php echo $row['price']; ?>/-</td>
               <td>
                  <a href="admin.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
               </td>
            </tr>
         <?php }} ?>
         </table>
      </div>
   
   </div>
   
   
   </body>
   </html>

