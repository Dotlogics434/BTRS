
         <?php
  error_reporting(E_ERROR | E_PARSE);       
include '../dbconfig.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<link rel="stylesheet" href="style/style_verticle_menu.css" type="text/css"  />
<link rel="stylesheet" href="style/style_hover.css" type="text/css"  />
<title>welcome </title>

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

<div class="header">
    <div class="left">
        <label><a href="#">Bus Ticket Reservation System</a></label>
    </div>
    <div class="right">
        <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">

</div>
                               
             
   <div id="navigation" class="navigation" style="width:200px; float:left; height: 200px;">
 <ul class="top-level" >
        <li><a href="#">Operations</a>
            <ul class="sub-level">
                <li><a href="adminop/set_bus_schedules.php">Change Schedules</a></li>
                <li><a href="adminop/set_ticket_fares.php">Change Ticket Fares</a></li>
                <li><a href="adminop/set_cargo_fares.php">Change Cargo fares</a></li>
                <li><a href="adminop/set_room_fares.php">Change Room Fares</a></li>
            </ul>
        </li>
        <li><a href="about_us.php">About</a></li>
        <li><a href="contact_us.php">Contact</a></li>
         <li>
            <a href="#">Settings</a>
            <ul class="sub-level">
                
                <li><a href="update_user_profile.php">Update Profile</a></li>
                <li><a href="/classes/access_user/test_access_level.php">Admin Operations</a></li>
                
                 <?php include_once 'access_user_class.php';
                 $page_protect = new Access_user;
                 if ($page_protect->access_level >= DEFAULT_ADMIN_LEVEL) { // this link is only visible for admin level user ?>
                <li><a href="/classes/access_user/admin_user.php">Admin Operations </a></li>
                <?php } // end hide admin menu link ?>

            </ul>
        </li>
        <li>
            <a href="#">FAQ</a>
            <ul class="sub-level">
                <li><a href="#">Sub Menu Item 1</a></li>
                <li><a href="#">Sub Menu Item 3</a>
                    <ul class="sub-level">
                        <li><a href="#">Sub Sub Menu Item 1</a></li>
                        <li><a href="#">Sub Sub Menu Item 2</a></li>
                        <li><a href="#">Sub Sub Menu Item 3</a></li>
                        <li><a href="#">Sub Sub Menu Item 4</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">News</a>
            <ul class="sub-level">
                <li><a href="#">Sub Menu Item 1</a>
                    <ul class="sub-level">
                        <li><a href="#">Sub Sub Menu Item 1</a></li>
                        <li><a href="#">Sub Sub Menu Item 2</a></li>
                        <li><a href="#">Sub Sub Menu Item 3</a></li>
                        <li><a href="#">Sub Sub Menu Item 4</a></li>
                    </ul>
                </li>
                <li><a href="#">Sub Menu Item 2</a></li>
                <li><a href="#">Sub Menu Item 3</a></li>
            </ul>
        </li>
    </ul>
    </div>
        
	<body>        
		</body>
        </html>