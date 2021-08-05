<?php

$conn = mysqli_connect("localhost", "root", "", "makos_quiz");
$mysqli = new mysqli("localhost", "root", "", "makos_quiz");

if(!$conn){
    die("Connection Failed, Please Try Again !!".mysqli_connect_error());
}

?>