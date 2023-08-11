<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/login.css">
    <title>VIT Cakes</title>
    <link rel="stylesheet" href="login.css">
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
       <li><a href="index.php">Home</a> </li>
       <li><a href="menu.php">Menu</a></li>
       <li><a href="">Contact Us</a> </li>
       
   </ul>
</div>
    <div class="bg">
        <form class="clogin" action="cloginprocess.php" method="post" >
            <label class="head" for="">Customer Login</label>
            <?php if(isset($_GET['error'])){?>
            <p class = "error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <br>
            <br>
            <label for="">Username :</label>
            <input class="form-element" name="username" id="cusername" type="text">
            <br>
            <label for="">Password  :</label>
            <input class="form-element" name="password" id="cpassword" type="password">
            <br><br>
            <input class="btn" type="submit" value="Submit">
        </form>
        <form class="alogin" action="aloginprocess.php" method="post" >
            <label class="head" for="">Admin Login</label>
            <?php if(isset($_GET['error1'])){?>
            <p class = "error"><?php echo $_GET['error1'];?></p>
            <?php } ?>
            <br>
            <br>
            <label for="" >Username :</label>
            <input class="form-element" name="ausername" id="ausername" type="text">
            <br>
            <label for="">Password  :</label>
            <input class="form-element" name="apassword" id="apassword" type="password">
            <br><br>
            <input class="btn" type="submit" value="Submit">
        </form>

        
        <label class="signuptext" for="">Don't have an account?</label>
        <a href=""><button class="btnsu">Sign Up</button></a>

     
        
    </div>
    
</body>
<script src="login.js"></script>
</html>