<?php

 session_start();
 if(!isset($_SESSION['anyusername']))
 {
    header('location:index.html');
 }
 
 

 ?>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Flipkart Authenticate</title>
 </head>
 <body>
        <h2>Welcome to Flipkart <?php echo $_SESSION['anyUsername']; ?></h2>
        <a href="index.html"> Click here to access flipkart</a><br><br>
        <a href="logout.php"> Click here to logout from flipkart</a>
 </body>
 </html>