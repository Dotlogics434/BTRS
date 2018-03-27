 <html>
 <head>
 <title>Bus ticket Reservtion</title>
<script src="jquery&bootstrap plugin/jquery.js"></script>
        <script src="jquery&bootstrap plugin/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">
</head>

<body>
 <div id="navigation" class="navigation" style="width:200px; float:left; height: 200px;">
 <ul class="top-level" >
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
</body>
</html>