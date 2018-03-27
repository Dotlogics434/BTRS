<?php
$conn = mysql_connect("localhost","root","toor");
mysql_select_db("busticket",$conn);

$chk = $_POST['users'];
$validate=$_POST['validate'];

$chk = $_POST['users'];
$chkcount = count($chk);
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["userName"]);
for($i=0;$i<$usersCount;$i++) 
$id = $chk[$i];
mysql_query("UPDATE ticket_reservation set validate_status='" . $_POST["validate"][$i] . "' WHERE userid='".$id[$i]."'");
}

?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["users"]);

$chkcount = count($chk);
	
for($i=0;$i<$rowCount;$i++) {
$id = $chk[$i];
$result = mysql_query("SELECT * FROM ticket_reservation WHERE userid='" . $id . "'");
$row[$i]= mysql_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="userId[]" class="txtField" value="<?php echo $row[$i]['userid']; ?>"><input type="text" name="userName[]" class="txtField" value="<?php echo $row[$i]['userid']; ?>"></td>
</tr>
<tr>
<td><label>busid</label></td>
<td><input type="text" name="busid[]" class="txtField" value="<?php echo $row[$i]['busid']; ?>"></td>
</tr>
<td><label>No. Of Seats</label></td>
<td><input type="text" name="numseats[]" class="txtField" value="<?php echo $row[$i]['numberofseats']; ?>"></td>
</tr>
<td><label>Validate status</label></td>
<td>
<select class="txtField" name="validate"><option name="validate[]" value="No">No</option>
<option name="validate[]" value="Yes">Yes</option>
</select>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>