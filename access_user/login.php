<?php 
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/access_user_class.php"); 

$my_access = new Access_user;
$my_access->login_reader();

if (isset($_GET['activate']) && isset($_GET['ident'])) { // this two variables are required for activating/updating the account/password
	//$my_access->auto_activation = false; // use this (true/false) to stop the automatic activation
	$my_access->activate_account($_GET['activate'], $_GET['ident']); // the activation method 
}
if (isset($_GET['validate']) && isset($_GET['id'])) { // this two variables are required for activating/updating the new e-mail address
	$my_access->validate_email($_GET['validate'], $_GET['id']); // the validation method 
}
if (isset($_POST['Submit'])) {
	$my_access->save_login = (isset($_POST['remember'])) ? $_POST['remember'] : "no"; // use a cookie to remember the login
	$my_access->count_visit = true; // if this is true then the last visitdate is saved in the database
	$my_access->login_user($_POST['login'], $_POST['password']); // call the login method
} 
$error = $my_access->the_msg; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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


</head>

<body><div class="form-container">
<h2>Login:</h2>
<p>Please enter your login and password.</p>
<div class="form-group">
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
  <input type="text" name="login" class="form-control" size="20" value="<?php echo (isset($_POST['login'])) ? $_POST['login'] : $my_access->user; ?>"><br>
  
  <input type="password" name="password" class="form-control" size="8" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : $my_access->user_pw; ?>"><br>
  <label for="remember">Remember login?</label>
  <input type="checkbox" name="remember" value="yes"<?php echo ($my_access->is_cookie == true) ? " checked" : ""; ?>>
  <br>
  <input type="submit" name="Submit" value="Login">
</form>


<p><b><?php echo (isset($error)) ? $error : "&nbsp;"; ?></b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!-- Notice! you have to change this links here, if the files are not in the same folder -->
<p>Not registered yet? <a href="./register.php">Click here.</a></p>
<p><a href="./forgot_password.php">Forgot your password?</a></p>

</div>
</div>
</body>
</html>
