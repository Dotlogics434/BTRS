<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("phppot_examples",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM users WHERE userId='" . $_POST["users"][$i] . "'");
}
header("Location:list_user.php");
?>