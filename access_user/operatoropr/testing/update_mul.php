<?php
include_once 'dbcon.php';
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