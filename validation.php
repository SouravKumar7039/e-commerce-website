<?php

    session_start();
    
    
    $con = mysqli_connect('localhost', 'root');
    if($con)
    {
        echo "Connection Successfully";
    }
    else
    {
        echo "No Connection";
    }

    mysqli_select_db($con, 'flipkart-signup');

    $name = $_POST['email'];
    $pass = $_POST['password'];

    $quer = "select * from authentication where username = '$name' && password = '$pass' ";
    
    $result = mysqli_query($con, $quer);
    $num = mysqli_num_rows($result); //check the user are already present or not
    if($num ==1)
    {
        $_SESSION['anyUsername'] = $name;
        header('location:index.html');
        echo "<script>alert('Great! Successfully Login.')</script>";
    }
    else
    {
        echo "<script>alert('Soory! Username and password not matched.')</script>";
        header('location:login-flipkart.html');
    }

?>