<?php

session_start();

include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];

    if(empty($username) !=false ){
        header("Location: ../signup.php?error=empty");
        exit(); 
    }
    elseif(empty($password) !=false ){
        header("Location: ../signup.php?error=empty");
        exit(); 
    }
    else{
        $sql = "SELECT username FROM user WHERE username='$username'";
        $result = $conn->query($sql);
        $username_check = mysqli_num_rows($result);
        
        if($username_check > 0){
            header("Location: ../signup.php?error=username");
            exit(); 
        }
        else{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, password) 
            VALUES('$username', '$hashed_password')";
                
            $result = mysqli_query($conn, $sql);
                
            header("Location: ../index.php");
        }
}

?>