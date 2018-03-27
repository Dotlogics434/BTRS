<?php
///include_once 'db_config.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Bus Ticket Reservation </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
        <link rel="stylesheet" type="text/css" href="Style/add/style.css">
        <link rel="stylesheet" type="text/css" href="Style/add/styles.css">

</head>
<body>
<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Services</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Schedules</span></a>
            <ul>
               <li><a href='Schedule.php'><span>Arrivals</span></a></li>
               <li class='last'><a href='Schedule.php'><span>Departures</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Ticket Fares</span></a>
            <ul>
               <li class='last'><a href='ticket_fares.php'><span>Check ticket Fares</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Cargo Services</span></a>
    
         </li>
      </ul>
   </li>
   <li><a href='About_us.php'><span>About</span></a></li>
   <li class='last'><a href='contact_us.php'><span>Contact</span></a></li>
</ul>
</div>

<?php include_once("login.php")?>      
</body>
</html>