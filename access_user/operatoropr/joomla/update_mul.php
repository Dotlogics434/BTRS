<?php
$conn = mysql_connect("localhost","root","toor");
mysql_select_db("busticket",$conn);
$id = $_POST['userid'];
$fn = $_POST['busid'];

$chk = $_POST['users'];
$validate=$_POST['validate'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE users SET validate_status='$validate[$i]' WHERE id=".$id[$i]);
}
header("Location: index.php");
?>