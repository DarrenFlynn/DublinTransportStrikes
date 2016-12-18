<?php

function setComment($conn){
    
    if(isset($_POST['commentSubmit'])){
        $username = $_POST['username'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments(username, date, message) VALUES('$username','$date','$message')";
        $result = $conn->query($sql);
    }
}

function getComment($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $id = $row['username'];
        $sql2 = "SELECT * FROM user WHERE id='$id'";
        $result2 = $conn->query($sql2);
        if($row2 = $result2->fetch_assoc()){
            echo "<div class='comment-box' style='position:relative;'><p>";
            echo $row2['username']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
            echo "</p>";
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id']){
                    echo "<form method='POST' action='".deleteComment($conn)."' style='position:absolute;top:0px;right:0px;'>
                        <input type='hidden' name='cid' value='".$row['cid']."'/>
                        <button type='submit' name='commentDelete' class='btn btn-danger'>Delete</button>
                    </form>";
                }
            }
            echo "</div>";
        }
    }
}

function deleteComment($conn){
    
    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql);
    }
}