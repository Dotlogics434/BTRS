<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'toor';
$dbName = 'busticket';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}

?>