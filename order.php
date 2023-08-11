<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="assets/order.css">
</head>
<body>
<div  class="menu">
        
      
        <ul class="menu-bar">
          <img src="assets/images/logo.png" class="logo" alt="">
       <li><a href="logout.php">Logout</a> </li>
       <li><a href="welcome.php">Home</a></li>
       <li><a href="">Contact Us</a> </li>
       <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;700&display=swap" rel="stylesheet">
       
   </ul>
</div>
    <div class="bg">

            <center>
                <br><br><br>
            <label class="txt" for="">Order Here</label
            <br><br><br><br>
            </center>
            
        <center>
            <form action="" method="get" class="search-form">
                <input type="text" placeholder="Select Your Cake" name="search" class="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">&nbsp;
            
                <button type="submit" class="btn">Select</button>
            </form>
        </center>
        <?php 
                    require_once('db_con.php');

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query="SELECT * FROM sys.menu WHERE itemcode = '$filtervalues' ;";
                        $query_run = mysqli_query($conn,$query);
                        $result = mysqli_fetch_assoc($query_run);
                    }
                    ?>

        <center>
            
            <br><br><br><br><br>
            <form action="orderback.php" method="post" class="order-form" onsubmit="">
            <label for="" class="form-elements">Client Username :</label><br>
                <input type="text" class="form-inp" value="<?php echo $_SESSION['user_id'];?>" required disabled> <br>
                <label for="" class="form-elements">Client Name :</label><br>
                <input type="text" class="form-inp" value="<?php echo $_SESSION['usernamef']." ".$_SESSION['usernamel'];?>" required> <br>
                <label for="" class="form-elements">Cake Name :</label><br>
                <input type="text" class="form-inp" value="<?php echo $result['item'];?>" required disabled> <br>
                <label for="" class="form-elements">Weight :</label><br>
                <input type="text" class="form-inp" value="<?php echo $result['weight']." Kg";?>" required disabled> <br>
                <label for="" class="form-elements">Category :</label><br>
                <input type="text" class="form-inp" value="<?php echo $result['category'];?>" required disabled> <br>
                <label for="" class="form-elements">Price :</label><br>
                <input type="text" class="form-inp" value="<?php echo $result['price'];?>" required disabled> <br>
                <label for="" class="form-elements">Delivery Address :</label><br>
                <input type="text" class="form-inp" value="<?php echo $_SESSION['add'];?>" required> <br>
                <br><br>
                <center>
                    <button class="btn" type="submit">Order Now !</button>
                </center>
            </form>
            
                    <br><br><br>

        </center>
        
    </div>
    
</body>
</html>