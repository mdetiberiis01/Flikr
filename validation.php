<?php

session_start();


$con = mysqli_connect("localhost", "mark", "@Yankees12!", "login");
$con = mysqli_connect("localhost", "mark", "@Yankees12!");
    

mysqli_select_db($con, "login");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from login where User = '$name' && Pass = '$pass'";

$result = mysqli_query($con, $s);

//$num = mysqli_num_rows($result);

if (mysqli_num_rows($result) == 1){
    $_SESSION['user'] = $name;
    header('location:home.php');
    
}else{
    header('location:index.php');
}