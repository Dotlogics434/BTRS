
<?php
error_reporting(E_ERROR | E_PARSE);  
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/connection.php");

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bus Ticket Reservation System</title>
        <script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
               <body>
                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Confirm Ticket Reservation</h3>
                                    
                                    </div>
                               
                                
                                <div class="panel-body" style="margin-top:30px">
                                    <form class= "Ticket-Fare-lookup" id="TicketFares" role="form" action="set_ticket_fare.php" method="post" >
                                 <div class="form-controls">
                                    <table class="form-controls" align="center" border="1">
                                    <tr>
                                    <th>BUS ID</th><th>User ID</th><th>Operator Status</th>   
                                    </tr>
                                    <?php 
                                     $result=mysql_query("SELECT * FROM Schedules Where oprstatus='Yes'") or die(mysql_error());
                                      //output data of each row
                                        while($row = mysql_fetch_assoc($result)) {
                                        echo " <tr> <td>" . $row["busid"]. "</td><td> " . $row["userid"]. "</td><td> " . $row["oprstatus"]. "</tr>";
                                    }
                                    
                                    

                                    ?>                              
                                    </table>    
                                                 
                                </div>
                            </form>
                            </div>
                        </div>

                    

                    </div>
                    </div>
</body>
                    </html>
