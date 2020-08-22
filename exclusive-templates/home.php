<?php 
session_start() ;
if(!isset($_SESSION['username'])){
    header('location:login.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <a href="logout.php"  style="margin-top: -200px !important;float:right;
    color: white !important; ">LOG OUT</a>
    
  <h1 style="color:white;">Welcome <?php echo $_SESSION['username'] ; ?></h1>  
</div>
</body>
</html>