<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST["username"]) && isset($_POST["password"])){
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if ($count >= 1) {
        $_SESSION['login_user'] = $myusername;
        echo "Logged in";
        header('Location: index.php');
    } else {
        $_SESSION['incorrect'] = "Incorrect username or password!";
	    header('Location: index.php');
    }   
}else{
    echo "NO INPUTS!";
header('Location: index.php');
}
}