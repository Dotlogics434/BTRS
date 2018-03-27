
<?php
error_reporting(E_ERROR | E_PARSE);  
//include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/adminop/header_admin.php");
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
                                    <h3 class="panel-title">Set Ticket Fares</h3>
                                    
                                    </div>
                               
                                
                                <div class="panel-body" style="margin-top:30px">
                                    <form class= "Ticket-Fare-lookup" id="TicketFares" role="form" action="set_ticket_fare.php" method="post" >
                                 <div class="form-controls">
                                    
                                    <label class="form-controls" for="source" style="margin-left:20px">From</label>
                                     <select class="form-controls" name="source" style="margin-left:20px">
                                        <option value="Select">--Select--</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Peshawar">Peshawer</option>
                                        </select> 
                                        <label class="form-controls" for="destination" style="margin-left:20px">To</label>
                                     <select class="form-controls" name="destination" style="margin-left:px">
                                        <option value="Select">--Select--</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karchi</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Peshawar">Peshawer</option>
                                        </select> 
                                        <label class="form-controls" for="Rate" style="margin-left:20px">Rate</label>
                                        <input class="form-controls" type="text" size="10" placeholder="rate">
                                       <label class="form-controls" for="source" style="margin-left:20px">Departure Time</label>
                                       <input class="form-controls" type="time" name="time"> 
              					<div class="Submit-Request" align= "center">
                                     <input type="submit" class="btn btn-custom" data-audit="yes" id="Ticket-fare-lookup" name ="Ticket-fare-lookup"  value="Save">
                                    
                                </div>              
                                </div>
                            </form>
                            </div>
                        </div>

                    

                    </div>
                    </div>
</body>
                    </html>
