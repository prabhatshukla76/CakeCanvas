<?php

$conn = mysqli_connect("database-faculty-vit.cfk9lvrbeabj.ap-south-1.rds.amazonaws.com", "admin", "password","sys");

if(!$conn){
    echo "Connection failed";
}
