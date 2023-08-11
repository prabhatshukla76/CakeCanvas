<?php
include "db_con.php";

if(isset($_POST['ausername'])&& isset($_POST['apassword']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
}

$username = validate($_POST['ausername']);
$password = validate($_POST['apassword']);

if(empty($username))
{
    header("Location: login.php?error1=Username is required");
    exit();
}
else if(empty($password))
{
    header("Location: login.php?error1=Password is required");
    exit();
}

$sql = "select * from sys.admin where user_id = '$username' and password = '$password'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['user_id'] === $username && $row['password'] === $password)
    {
        echo "logged in";
        session_start();
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['name']=$row['first_name'];
        header("Location: adminwelcome.php");
        exit();
        

    }
}
else{
    header("Location: login.php?error1=Incorrect Username or Password");
    exit();
}