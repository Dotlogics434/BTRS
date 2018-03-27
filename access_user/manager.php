<?php 
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/access_user_class.php");
include_once("HeaderManager.php");
session_start();
?>
<html>
<head>
    </head>
    <body>
        <div><?php echo "Hello Manager !"; ?></div>
<div class="morph pic" style="width:200px; float:left; height: 200px;">
<a href="Staff/Duty_timing.php"><img src="images/Duty_timing.jpg" alt="beach"></a>
</div>
<div class="morph pic" style="width:200px; float:left; height: 200px;">
<a href="Staff/profile.php"><img src="images/profile.jpg" alt="beach"></a>
</div>
<div class="morph pic" style="width:200px; float:left; height: 200px;">
<img src="images/Duty_timing.jpg" alt="beach">
</div>
<div class="morph pic" style="width:200px; float:left; height: 200px;">
<img src="images/Duty_timing.jpg" alt="beach">
</div>
</body>
</html>