<?php

include '../db.php';
    
if(isset($_POST['querySubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];
        
    $sql = "INSERT INTO queries(name, email, query) VALUES('$name','$email','$query')";
    $result = $conn->query($sql);
    
    header("Location: ../contact.php");
}
    
