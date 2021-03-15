<?php

session_start();


if(!isset($_SESSION['user'])){
    header('location:index.php');
}

?>


<html>
    <head>
        <title> Netmatch </title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <link rel = "styesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="nm-shortcut.png" type="image/gif" rel="shortcut icon" /> 
        
    </head>

        <body>
            <div class="container"> 
            
            <a class="float-right" href = "home.php"> Home </a>
            <h1> It Looks like you've already voted on all our reccomendations <?php echo $_SESSION['user'];?> Make sure to check back soon as we're constantly updating our database </h1> 
               
               
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a class="float-right" href = "logout.php"> LOGOUT </a>
            </div>
    
        </body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class = "copyright"> 
            <p>Copyright ©2021 Flikr App Co. All Rights Reserved</p>
    </div>
</html>