<?php
$conn = mysql_connect("localhost","root","toor");
mysql_select_db("busticket",$conn);
$result = mysql_query("SELECT * FROM ticket_reservation");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Username</td>
<td>Bus ID</td>
<td>No. Seats</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["userid"]; ?>" ></td>
<td><?php echo $row["userid"]; ?></td>
<td><?php echo $row["busid"]; ?></td>
<td><?php echo $row["numberofseats"]; ?></td>
<td><?php echo $row["validate_status"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>