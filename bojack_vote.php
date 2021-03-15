<?php

$db = "login";

session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
}

include 'registration.php';

$name = $_SESSION['user'];

$con = mysqli_connect("localhost", "mark", "@Yankees12!", $db);

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}


mysqli_select_db($con, "login");

$movie = "Bojack Horseman";
$yes = 1;
$no = 0;

$would = "update $name SET would_watch=$yes AND wouldnt_watch=$no WHERE title = '$movie'";
$wont = "update $name SET would_watch=$no AND wouldnt_watch=$yes WHERE title = '$movie'";
$saw= "update $name SET SET would_watch=$no AND wouldnt_watch=$no  WHERE title = '$movie'";


    


if(isset($_POST['no'])){
    mysqli_query($con, $wont);
    header('location:done_voting.php');

}//if isset

if(isset($_POST['yes'])){
    mysqli_query($con, $would);
    header('location:done_voting.php');
}

if(isset($_POST['saw'])){
    mysqli_query($con, $saw);
    header('location:done_voting.php');
}
