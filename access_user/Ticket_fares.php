<?php
//include_once('dbconfig.php');
include_once 'header_customer.php';
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bus Ticket Reservation System</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
               <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>


               </head>
               <body>
                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Ticket Fares</h3>
                                    
                                    </div>
                               
                                
                                <div class="panel-body" style="margin-top:30px">
                                    <form class= "Ticket-Fare-lookup" id="TicketFares" role="form" action="Ticket_fares2.php" method="post" >
                                 <div class="form-group">
                                    
                                    <label  for="source" style="margin-left:20px">From</label>
                                     <select name="source" style="margin-left:20px">
                                        <option value="Select">--Select--</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Peshawar">Peshawer</option>
                                        </select> 
                                        <label  for="destination" style="margin-left:20px">To</label>
                                     <select name="destination" style="margin-left:px">
                                        <option value="Select">--Select--</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karchi</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Peshawar">Peshawer</option>
                                        </select> 
                                        
              					<div class="Submit-Request" align= "center">
                                     <input type="submit" class="btn btn-custom" data-audit="yes" id="Ticket-fare-lookup" name ="Ticket-fare-lookup"  value="Search">
                                    
                                </div>              
                                </div>
                            </form>
                            </div>
                        </div>

                    

                    </div>
                    </div>
</body>
                    </html>
