<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sqlUsername = "SELECT * FROM users WHERE username = '$myusername'";
    $result = mysqli_query($db, $sqlUsername);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if ($count == 0) {
        //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        $sqlRegister = "INSERT INTO users (username, password) VALUES ('$myusername', '$mypassword')";
        $result = mysqli_query($db, $sqlRegister);
    } else {
        $_SESSION['user_exists'] = "User already exists!";
    }

    header('Location: index.php');
}