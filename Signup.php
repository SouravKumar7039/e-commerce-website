<?php

    session_start();
    header('location:login-flipkart.html');
    

    $con = mysqli_connect('localhost', 'root');
    if($con)
    {
        echo "Connection Successfully";
    }
    else
    {
        echo "No Connection";
    }

    mysqli_select_db($con, 'flipkart-signup'); //database Name

    $name = $_POST['email'];
    $pass = $_POST['password'];

    $quer = "select * from authentication where username = '$name' && password = '$pass' ";
    
    $result = mysqli_query($con, $quer);
    $num = mysqli_num_rows($result); //check the user are already present or not
    if($num ==1)
    {
        echo "Duplicate Data";
    }
    else
    {
        $querr = "insert into authentication(username, password) values('$name' , '$pass')";
        mysqli_query($con, $querr);
    }

?>