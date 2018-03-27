<?php
//include_once('header.php');
include_once 'dbconfig.php';
include_once 'Header.php';
/*
if(!$user->is_loggedin())
{
    $user->redirect('index.php');
}*/
?>
<html><head><title>Schedule Arrivals</title>
<script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
        <!-- HTML5 shim and Respond.js f<code></code>or IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]--
        
        
        <!--Footer style start-->
        <link rel="stylesheet" type="text/css" href="../Footercss/css/style1.css">
        <link rel="stylesheet" type="text/css" href="../Footercss/css/style-responsive.css">
        <link rel="stylesheet" type="text/css" href="../Footercss/css/bootstrap.min.css">
        
        
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         <link rel="stylesheet" href="/resources/demos/style.css">
        


</head>
<body>
          </div>

                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Schedules</h3>
                                    
                                </div>
                                
                                <div class="panel-body">
                                                <form id= "form-group" style= "font-color: orange " method= "post" action="CheckArr-Depr.php" >
                                    
                                               <div class="form-group" style="word-spacing: 20px;">
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
                                            
                                     
                                        <label  for="To">To </label>
                                        
                                         <select name="destination" id="destination">
                                            <option value="Select">--Select--</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Karachi">Karchi</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Peshawar">Peshawer</option>
                                             </select>
                                     </div>
                                      <div class="form-group" style="margin-left:250px;">
                                    <button type="submit" class="btn btn-success btn-md" id="submit">Check</button>
                                  </div>
                                    </form> 
                                     
                                     
                                      
                                      
                                </div>
                            </div>
                        </div>

                    

                    </div>
                    </div>
</body>
</html>