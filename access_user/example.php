<?php 
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/access_user_class.php");



$page_protect = new Access_user;
// $page_protect->login_page = "login.php"; // change this only if your login is on another page
$page_protect->access_page(); // only set this this method to protect your page
$page_protect->get_user_info();
$hello_name = ($page_protect->user_full_name != "") ? $page_protect->user_full_name : $page_protect->user;

if (isset($_GET['action']) && $_GET['action'] == "log_out") {
	$page_protect->log_out(); // the method to log off
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<link rel="stylesheet" href="style/style_verticle_menu.css" type="text/css"  />
<link rel="stylesheet" href="style/style_hover.css" type="text/css"  />

<title>Bus reservation</title>
</head>

<body>

<div class="header">
    <div class="left">
        <label>Bus Ticket Reservation</a></label>
    </div>
    <div class="right">
        <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">

</div>
                               
             
   <div id="navigation" class="navigation" style="width:200px; float:left; height: 200px;">
 <ul class="top-level" >
     <li><a href="home.php">Home</a></li>
        <li><a href="#">Services</a>
            <ul class="sub-level">
                <li><a href="schedule_passenger.php">Check Schedules</a></li>
                <li><a href="ticket_fares.php">Ticket Fares</a></li>
                <li><a href="#">Reservations</a>
                    <ul class="sub-level">
                    <li><a href="Reservation.php">Reservations</a></li>
                    <li> <a href="change_cancellation.php">Change/Cancellation</a></li>
                    </ul>
                    </li>
                
            </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li>
            <a href="#">Settings</a>
            <ul class="sub-level">
                <li><a href="./update_user.php">Update User Account</a></li>
                <li><a href="./update_user_profile.php">Update Profile</a></li>
                <li><a href="/classes/access_user/test_access_level.php">Access Level</a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=log_out">Logout</a></li>
                 <?php 
                 
                 if ($page_protect->access_level >= DEFAULT_ADMIN_LEVEL) { // this link is only visible for admin level user ?>
                <li><a href="/classes/access_user/admin_user.php">Admin operations </a></li>
                <?php } // end hide admin menu link ?>

            </ul>
        </li>
    </ul>
    
<h2><?php echo "Hello ".$hello_name." !"; ?></h2>

<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>

</html>