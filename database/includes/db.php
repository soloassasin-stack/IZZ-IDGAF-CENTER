<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "izzidgaf_center";


$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $db
);


if(!$conn){

die("Database connection failed");

}

?>
