<?php 
include_once("Header.php");
include_once'dbconfig.php';
include_once'connection.php';
$status=$_POST['status'];
$source=$_POST['source'];
$destination=$_POST['destination'];
      $query = "SELECT * FROM Schedules WHERE status LIKE '".$status."' AND source LIKE '".$source."' AND destination LIKE '".$destination."' " ;
	  $result = mysql_query($query) or die(mysql_error());
	  $row = mysql_fetch_array($result);
/*
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['0'] . '<br>';	
	}
} */



?>        
<html>
<head><title> Ticket Fares</title>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    width: 60%;
}

th {
    height: 50px;
}
</style>




</head><body>
 <table align="center">
  <tr>
    <th>Bus ID</th>
    <th>Status</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Date & Time</th>
   
  </tr>
  <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
   

  </tr>
  
</table>

                  
</body>
</html>