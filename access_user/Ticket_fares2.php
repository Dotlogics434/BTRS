<?php
    include_once('connection.php');
    include_once('Header.php');
	 


     $Source = $_POST['source'];
	   $destination = $_POST['destination'];
	  
      $query= mysql_query("SELECT * FROM busFares WHERE source like '".$Source."' AND destination LIKE '".$destination."' ORDER BY time") or die (mysql_error());
      $row = mysql_fetch_row($query);
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




</head>
 <div class="panel panel-ybtm-red">
                                
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Ticket Fares</h3>
                                    
                                    </div>
                                    <table align="center">
                                              <tr>
                                                <th>Bus ID</th>
                                                <th>From</th>
                                                <th>Destination</th>
                                                <th>Time</th>
                                                <th>Date</th>
                                                <th>Ticket Fare</th>
                                              </tr>
                                              <tr>
                                                <td><?php echo $row[0]?></td>
                                                <td><?php echo $row[1]?></td>
                                                <td><?php echo $row[2]?></td>
                                                <td><?php echo $row[3]?></td>
                                                <td><?php echo $row[4]?></td>
                                                <td><?php echo $row[5] ." RS"?></td>

                                              </tr>
                                              
                                            </table>
                                    </div>
 