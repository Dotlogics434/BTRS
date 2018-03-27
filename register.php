<?php 
include($_SERVER['DOCUMENT_ROOT']."/classes/access_user/access_user_class.php"); 
include_once"Header.php";
$new_member = new Access_user;
// $new_member->language = "de"; // use this selector to get messages in other languages

if (isset($_POST['Submit'])) { // the confirm variable is new since ver. 1.84
	// if you don't like the confirm feature use a copy of the password variable
	$new_member->register_user($_POST['login'], $_POST['password'], $_POST['confirm'], $_POST['name'], $_POST['info'], $_POST['email']); // the register method
} 
$error = $new_member->the_msg; // error message

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Bus Ticket Reservation </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="Style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Style/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="Style/styles.css">

</head>

<body>

<div class="form-container">
  <h2>Please register:</h2>
<p>Please fill in the following fields (fields with a * are required).</p>
<form class="form-group" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
  <label for="login">Login:</label>   
  <input type="text" name="login" class="form-control" size="12" value="<?php echo (isset($_POST['login'])) ? $_POST['login'] : ""; ?>">
  * (min. 6 chars.) </div>
  <div class="form-group">
  <label for="password">Password:</label>
  <input type="password" name="password" class="form-control" size="6" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : ""; ?>">
  * (min. 4 chars.) </div>
  <div class="form-group">
  <label for="confirm">Confirm password:</label>
  <input type="password" name="confirm" class="form-control" size="6" value="<?php echo (isset($_POST['confirm'])) ? $_POST['confirm'] : ""; ?>">
  * </div>
  <div class="form-group">
  <label for="name">Real name:</label>
  <input type="text" name="name" class="form-control" size="30" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : ""; ?>">
  </div>
  <div class="form-group">
  <label for="email">E-mail:</label>
  <input type="text" name="email" class="form-control" size="30" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ""; ?>">
  *</div>
  <div class="form-group">
  <label for="info">Extra info:</label>
  <input type="text" name="info" class="form-control" size="50" value="<?php echo (isset($_POST['info'])) ? $_POST['info'] : ""; ?>">
  </div>
  <div class="form-group">
  <input type="submit" class="form-control" name="Submit" value="Submit">
</div>
</form>
<div class="form-group">
  <p><a href="<?php echo $new_member->login_page; ?>">Login</a></p>
</div>

<p><b><?php echo (isset($error)) ? $error : "&nbsp;"; ?></b></p>
<p>&nbsp;</p>
</div>

</body>
</html>
