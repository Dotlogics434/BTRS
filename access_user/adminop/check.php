<?php
 include_once($_SERVER['DOCUMENT_ROOT']."/classes/access_user/header_operator.php");
?>

<form action="check.php"   method="post">
  <table border="2">
    <tr>
      <th>Status</th>
      <th>Id</th>
      <th>User ID </th>
      <th>Bus ID</th>
      <th>Validate</th>
   </tr>

<?php
 $query = mysql_connect("localhost","root","toor");
  mysql_select_db("busticket",$query);
 $result=mysql_query("SELECT * FROM ticket_reservation WHERE validate_status='No'") or die(mysql_error());
while($row=mysql_fetch_array($result))
{
  echo "<tr><td><Select name='select'><option name='select' value='No'>Invalid</option>
                        <option name='select' value='Yes'>Validate</option>
                        </td><td>".$row['userid']."</td><td>".$row['busid']."</td><td>".$row['numberofseats']."</td></tr>";
      }
?>
<input type="submit" value="Submit" name="submit">
</table>
<?php

  $query = mysql_connect("localhost","root","toor");
  mysql_select_db("busticket",$query);
 if($_POST['submit']){
  for($i=0;$i<count($_POST['name']);$i++){
  $update = $checkbox[$i];
  $sql = "UPDATE UPDATE ticket_reservation SET validate_status='Yes' WHERE id='".$update."'";
  $result = mysql_query($sql);
}
}
if ($result){
  echo "<tr><td>Successful</td></tr>";
}
?>