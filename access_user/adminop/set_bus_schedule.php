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
                                    <h3 class="panel-title">Set Bus Schedules(Arrival / Departure)</h3>
                                    
                                </div>
<div class="form-container">
    <div class="form-group">
<?php   
                $busid=$_POST['busid'];
                $status=$_POST['status'];
                $source=$_POST['source'];
                //$numSeats=$POST['numseats'];
                $destination=$_POST['destination'];
                $dateTime=$_POST['Time'];
                error_reporting(E_ERROR | E_PARSE);
                $query = mysql_query("UPDATE schedules SET  status='".$status."',  source='".$source."',  destination='".$destination."', DateTime='".$dateTime."' WHERE busid='".$busid."' ") or die (mysql_error());
?>
 
<body>
         

                    <div class="col-sm-7">
                                
                                
                                <div class="panel-body">
                                                <form id= "form-group" style= "font-color: orange " method= "POST" action="set_bus_schedule.php" >
                                    
                                               <div class="form-group" style="word-spacing: 20px;">
                                              <?php echo "Query Executed successfuly"; ?>
                                              </div>
                                    </form> 
                                     
                                     
                                      
                                      
                                </div>
                            </div>
                                          

                    </div>
                    </div>
</body>
</html>