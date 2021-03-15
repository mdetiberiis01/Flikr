<?php

session_start();


if(!isset($_SESSION['user'])){
    header('location:index.php');
}


?>


<!DOCTYPE html>

<html>
    <head>
        <title> Voting </title>
    <link rel = 'stylesheet' href = 'style.css'/>
    <link href="nm-shortcut.png" type="image/gif" rel="shortcut icon" /> 
     
    </head>
<body>
    <div class = "vote"> <h2> Would You Watch</h2></div>
    <div class="container">
    <a href = "home.php"> Home </a>
    <form action = "index.php" method = "post" align = "center">
        <img src = "cover_art/bojack.jpg" width = '300' height = "500"/>
        
    </form>
     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        <div class = "button">
        
            <form method="POST" action="bojack_vote.php">
                
                <input type="submit" value = "No" class="no_button" name = 'no' />

            
            </form>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
            <form method="POST" action="bojack_vote.php">
                
                <input type="submit" value = "Yes" class="yes_button" name = 'yes' />                      
                      
            </form>
        
        </div>
       
        <a href = "logout.php"> LOGOUT </a> 
    </div>

    </body>

</html>

