<?php
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/connection.php"); 
?>
<html><head><title>Schedule Arrivals</title>
<script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
        <!-- HTML5 shim and Respond.js f<code></code>or IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       
        
        


</head>
<body>
<div class="col-sm-7">
<div class="panel panel-ybtm-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Set Ticket Fares</h3>
                                    
                                </div>
<div class="form-container">
    <div class="form-group">
<?php   
                $busid=$_POST['busid'];
                //$status=$_POST['status'];
                $source=$_POST['source'];
                $destination=$_POST['destination'];
                $dateTime=$_POST['time'];
                $ticketFare=$_POST['ticketFare'];
                error_reporting(E_ERROR | E_PARSE);
                $query = mysql_query("UPDATE busfares SET   source='".$source."',  destination='".$destination."', TicketFare='".$ticketFare."',
                 dateTime='".$dateTime."'  WHERE busid='".$busid."' ") or die (mysql_error());
                if($query){

                    echo "Record updated successfully";
                }
                else
                {
                    echo"an error accurd while saving the record";
                }
?>
 
<body>
         

                    <div class="col-sm-7">
                                
                                
                                <div class="panel-body">
                                                <form id= "form-group" style= "font-color: orange " method= "POST" action="set_bus_schedule.php" >
                                    
                                               <div class="form-group" style="word-spacing: 20px;">
                                              </div>
                                    </form> 
                                     
                                     
                                      
                                      
                                </div>
                            </div>
                                          

                    </div>
                    </div>
</body>
</html>