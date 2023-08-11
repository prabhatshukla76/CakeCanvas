<?php
include "db_con.php";

if(isset($_POST['username'])&& isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username))
{
    header("Location: login.php?error=Username is required");
    exit();
}
else if(empty($password))
{
    header("Location: login.php?error=Password is required");
    exit();
}

$sql = "select * from sys.user where user_id = '$username' and password = '$password'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    session_start();
    $row = mysqli_fetch_assoc($result);
    if($row['user_id'] === $username && $row['password'] === $password)
    {
        echo "logged in";
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['usernamef'] = $row['first_name'];
        $_SESSION['usernamel'] = $row['last_name'];
        $_SESSION['add'] = $row['address'];

        header("Location: welcome.php");
        exit();
        

    }
}
else{
    header("Location: login.php?error=Incorrect Username or Password");
    exit();
}

    // $username = $POST['username'];
    // $password = $POST['password'];

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);

//     $conn = mysqli_connect("database-faculty-vit.cfk9lvrbeabj.ap-south-1.rds.amazonaws.com", "admin", "password");
//     mysqli_select_db($conn, "sys");

   
//     $row = mysqli_fetch_array($result);
//     if($row['username']==$username && $row['password']==$password)
//     {
//         echo "login successful";
//     }
//     else{
//         echo "failed to login";
//     }
// ?>
