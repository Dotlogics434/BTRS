<?php
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/dbconfig.php"); 
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/adminop/new_bus.php"); 
?>
<html><head><title>Schedule Arrivals</title>
<script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
        <!-- HTML5 shim and Respond.js f<code></code>or IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
    <style type="text/css">

    .custom-date-style {
    background-color: red !important;
    }
    </style>
          


</head>
<body>
         

                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Set Schedules</h3>
                                    
                                </div>
                                
                                <div class="panel-body">
                                                <form id= "form-group" style= "font-color: orange " method= "post" action="set_bus_schedule.php" >
                                    
                                               <div class="form-group" style="word-spacing: 10px;">
                                        <label  for="Arrival-Departure">Bus Id </label>
                                        <input type="Text" placeolder="BusId ####" size="9" name="busid">
                                        <label  for="Arrival-Departure">Arrival/Departure </label>
                                        <select name="status" id="status">
                                            <option value="Select">--Select--</option>
                                                <option value="Arrival">Arrival</option>
                                                <option value="Departure">Departure</option>
                                        </select>

                                        <label  for="From">From </label>
                                        <select name="source" id="source">
                                            <option value="Select">--Select--</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Karachi">Karchi</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Peshawar">Peshawer</option>
                                            </select> 
                                            
                                     
                                        <label class="form-controls" for="To">To </label>
                                        
                                         <select class="form-controls" name="destination" id="destination">
                                            <option value="Select">--Select--</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Karachi">Karchi</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Peshawar">Peshawer</option>
                                             </select>
                                             <div>
                                            <label  class="form-controls" for="Time">Time </label>
                                           <input type="text" value="" id="datetimepicker"/><br><br></div>
                                      <div class="form-group" style="margin-left:250px;">
                                    <button type="submit" class="btn btn-success btn-md" id="submit">Save</button>
                                  </div>
                                    </form> 
                                     
                                     
                                      
                                      
                                </div>
                            </div>
                        </div>

                    

                    </div>
                    </div>
</body>
<script src="./jquery.js"></script>
    <script src="./jquery.datetimepicker.js"></script>
    <script>

    $('#datetimepicker').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
    startDate:  '1986/01/05'
    });
        
 </script> 
</html>