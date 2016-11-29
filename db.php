<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "team-project-login");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}