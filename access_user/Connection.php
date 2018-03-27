<?php
$servername = "localhost";
$username = "root";
$dbName = "reservation";

// Create connection
$conn = mysql_connect($servername, $username) or die (mysql_error());
$query = mysql_select_db($dbName, $conn) or die (mysql_error());

?>
