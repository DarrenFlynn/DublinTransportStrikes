<?php

session_start();

include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hashed_password = $row['password'];
$hash = password_verify($password, $hashed_password);

if($hash == 0){
    header("Location: ../index.php?error=error");
    exit();
}
else{
    $sql = "SELECT * FROM user WHERE username ='$username'
    AND password = '$hashed_password'";
    
    $result = $conn->query($sql);
    
    if(!$row = $result->fetch_assoc()){
        echo "Your username or password is incorrect!";
    } else{
        $_SESSION['id'] = $row['id'];
    }
    header("Location: ../home.php");
}