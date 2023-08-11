
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="assets/menu.css">
</head>
<body>
<div  class="menu">
        
      
        <ul class="menu-bar">
          <img src="assets/images/logo.png" class="logo" alt="">
       <li><a href="logout.php">Logout</a> </li>
       <li><a href="welcome.php">Home</a></li>
       <li><a href="order.php">Orders</a></li>
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
    <br><br>
        <center>
            <form action="" method="get" class="search-form">
                <input type="text" placeholder="Search Your Cake" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="search">&nbsp;
            
                <button type="submit" class="btn">Search</button>
            </form>
        </center>
        <center>
            <br><br><br>
            <label class="txt" for="">Our Menu</label>
            <br><br><br><br><br>
            <table>
                <thead>
                    <tr>
                        <td>Item Code </td>
                        <td>Item </td>
                        <td>Price </td>
                        <td>Weight</td>
                        <td>Category</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>CK0001</td>
                        <td>Chocolate Cake</td>
                        <td>Rs.400</td>
                        <td>1 pound</td>
                        <td>Eggless</td>
                    </tr> -->
                     
                    <?php 
                    require_once('db_con.php');

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query="SELECT * FROM sys.menu WHERE CONCAT(itemcode,item,price,weight,category) LIKE '%$filtervalues%' ;";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                <tr>
                                    
                                    <td><?= $row['itemcode'];?></td>
                                    <td><?= $row['item'];?></td>
                                    <td><?= "Rs. ".$row['price'];?></td>
                                    <td><?= $row['weight']." Kg";?></td>
                                    <td><?= $row['category'];?></td>
                                </tr>
                                <?php


                            }

                        
                        }
                        else
                        {
                            ?>

                            <tr>
                                <td colspan="5">No records found</td>
                            </tr>
                        <?php
                        }

                    }
                    ?>

                
                            
                    <tr>
                        <?php
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                        ?>
                       

                    </tr>

                            <?php
                        }
                        ?>
                       
                    
                           

                    <!-- <tr>
                        <td>CK0001</td>
                        <td>Chocolate Cake</td>
                        <td>Rs.400</td>
                        <td>1 pound</td>
                        <td>With Egg</td>
                    </tr>
                     -->
                    
                </tbody>
            </table>
        </center>
        
    </div>
    
</body>
</html>