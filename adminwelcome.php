<?php
session_start();
if(isset($_SESSION['user_id'])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/adminwelcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div  class="menu">
        
      
        <ul class="menu-bar">
          <img src="assets/images/logo.png" class="logo" alt="">
       <li><a href="logout.php">Logout</a> </li>
       <li><a href="">Menu</a></li>
       <li><a href="">Contact Us</a> </li>
       
   </ul>
</div>
    <div class="bg">
        <center>
        <label for="" class="hello">Hello Admin <?php echo($_SESSION['name'])?></label>
        </center>
        
    </div>
    
</body>
</html>
<?php
}
else{
    header("Location: index.php");
    exit();
}
?>