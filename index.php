<?php

$host= "db";
$port= 3306;
$user= "root";
$pass= "root";
$db= "db-test";

$conn=mysqli_connect($host,$port ,$user ,$pass);

if(!$conn){
    die("connection field: ".mysqli_connect_error());
}

echo "docker Connected to  mysql succesfully ";

?>