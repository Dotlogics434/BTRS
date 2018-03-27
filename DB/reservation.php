<?php
session_start();
if(isset($_SESSION['id']))
{
	$uid = $_SESSION['id'];
	$bus = $_GET['bus'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Online Bus-Ticket Reservation ::</title>
<link rel="stylesheet" href="style/table.css" />
<style>
a{cursor:default;}
</style>

</head>

<body topmargin="0" bottommargin="0" bgcolor="#CCCC99">
<table bgcolor="#FFCCFF" style="margin-top:0" align="center" width="800px" border="1" cellpadding="0" cellspacing="0">
<tr><td colspan="2" align="center" width="800px" height="140px"><img align="middle" width="800px" height="140px" src="images/Banner.jpg" />
</td></tr><tr><td colspan="2" bgcolor="#330000" align="center" height="5px">
<h2 style="text-align:center; color:#FFFFFF; font-family:Verdana, Geneva, sans-serif; margin-top:3px">

Welcome To Online Bus-Ticket Reservation</h2></td></tr>

<tr><td colspan="2" bgcolor="#CC6600" align="center" style="color:#FFFFCC; font-size:14px">
|| <b><?php echo date("D d-M-Y");?></b> ||</td></tr></table>
<?php
$uid = $_SESSION['id'];
if(isset($_POST['b']))
{
	if(isset($_POST['ck1']))
	{
		echo $c = $_POST['ck1'];
	}
	if(isset($_POST['ck2']))
	{
		echo $c = $_POST['ck2'];
	}
	if(isset($_POST['ck3']))
	{
		echo $c = $_POST['ck3'];
	}
	if(isset($_POST['ck4']))
	{
		echo $c = $_POST['ck4'];
	}
	if(isset($_POST['ck5']))
	{
		echo $c = $_POST['ck5'];
	}
	if(isset($_POST['ck6']))
	{
		echo $c = $_POST['ck6'];
	}
	if(isset($_POST['ck7']))
	{
		echo $c = $_POST['ck7'];
	}
	if(isset($_POST['ck8']))
	{
		echo $c = $_POST['ck8'];
	}
	if(isset($_POST['ck9']))
	{
		echo $c = $_POST['ck9'];
	}
	if(isset($_POST['ck10']))
	{
		echo $c = $_POST['ck10'];
	}
	if(isset($_POST['ck11']))
	{
		echo $c = $_POST['ck11'];
	}
	if(isset($_POST['ck12']))
	{
		echo $c = $_POST['ck12'];
	}
	if(isset($_POST['ck13']))
	{
		echo $c = $_POST['ck13'];
	}
	if(isset($_POST['ck14']))
	{
		echo $c = $_POST['ck14'];
	}
	if(isset($_POST['ck15']))
	{
		echo $c = $_POST['ck15'];
	}
	if(isset($_POST['ck16']))
	{
		echo $c = $_POST['ck16'];
	}
	if(isset($_POST['ck17']))
	{
		echo $c = $_POST['ck17'];
	}
	if(isset($_POST['ck18']))
	{
		echo $c = $_POST['ck18'];
	}
	if(isset($_POST['ck19']))
	{
		echo $c = $_POST['ck19'];
	}
	if(isset($_POST['ck20']))
	{
		echo $c = $_POST['ck20'];
	}
	if(isset($_POST['ck21']))
	{
		echo $c = $_POST['ck21'];
	}
	if(isset($_POST['ck22']))
	{
		echo $c = $_POST['ck22'];
	}
	if(isset($_POST['ck23']))
	{
		echo $c = $_POST['ck23'];
	}
	if(isset($_POST['ck24']))
	{
		echo $c = $_POST['ck24'];
	}
	if(isset($_POST['ck26']))
	{
		echo $c = $_POST['ck26'];
	}
	if(isset($_POST['ck27']))
	{
		echo $c = $_POST['ck27'];
	}
	if(isset($_POST['ck28']))
	{
		echo $c = $_POST['ck28'];
	}
	if(isset($_POST['ck29']))
	{
		echo $c = $_POST['ck29'];
	}
	if(isset($_POST['ck30']))
	{
		echo $c = $_POST['ck30'];
	}
	if(isset($_POST['ck31']))
	{
		echo $c = $_POST['ck32'];
	}
	if(isset($_POST['ck33']))
	{
		echo $c = $_POST['ck34'];
	}
	if(isset($_POST['ck35']))
	{
		echo $c = $_POST['ck36'];
	}
	if(isset($_POST['ck37']))
	{
		echo $c = $_POST['ck37'];
	}
	if(isset($_POST['ck38']))
	{
		echo $c = $_POST['ck38'];
	}
	if(isset($_POST['ck39']))
	{
		echo $c = $_POST['ck39'];
	}
	if(isset($_POST['ck40']))
	{
		echo $c = $_POST['ck40'];
	}
	if(isset($_POST['ck41']))
	{
		echo $c = $_POST['ck41'];
	}
	if(isset($_POST['ck42']))
	{
		echo $c = $_POST['ck42'];
	}
	if(isset($_POST['ck43']))
	{
		echo $c = $_POST['ck43'];
	}
	if(isset($_POST['ck44']))
	{
		echo $c = $_POST['ck44'];
	}
	if(isset($_POST['ck45']))
	{
		echo $c = $_POST['ck45'];
	}
	if(isset($_POST['ck46']))
	{
		echo $c = $_POST['ck46'];
	}
	if(isset($_POST['ck47']))
	{
		echo $c = $_POST['ck47'];
	}
	if(isset($_POST['ck48']))
	{
		echo $c = $_POST['ck48'];
	}
	if(isset($_POST['ck49']))
	{
		echo $c = $_POST['ck49'];
	}
	if(isset($_POST['ck50']))
	{
		echo $c = $_POST['ck50'];
	}
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $uid;?>&bus=<?php echo $bus; ?>" method="post" name="fm">
<table class="table" bgcolor="#FFFFFF" height="450px" align="center" width="800"  border="0" cellpadding="0" cellspacing="0">
<tr><td align="center" rowspan="13" width="36">W<br />I<br />N<br />D<br />O<br />W</td><td width="111" align="center">
<input type="checkbox" name="ck50" value="50" />50</td> 
<td width="109">&nbsp;</td> <td width="164">&nbsp;<td width="116">&nbsp;</td><td width="110">&nbsp;</td><td width="108">&nbsp;
<td align="center" rowspan="13" width="45">W<br />I<br />N<br />D<br />O<br />W</td></tr>
<tr><td align="center"><input type="checkbox" name="ck49" value="49" />49</td> <td>&nbsp;</td> <td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</tr>
<tr><td align="center"><input type="checkbox" name="ck48" value="48" />48</td> <td>&nbsp;</td> <td>&nbsp;<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</tr>
<tr><td align="center"><input type="checkbox" name="ck1" value="1" />01</td>
  <td align="center"><input type="checkbox" name="ck2" value="2"/>02</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck3" value="3"/>03</td>
<td align="center"><input type="checkbox" name="ck4" value="4" />04</td>
<td align="center"><input type="checkbox" name="ck5" value="5" />05</td></tr>
<tr>  <td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck6" value="6" />06</td>
<td align="center"><input type="checkbox" name="ck7" value="7" />07</td>
<td align="center"><input type="checkbox" name="ck8" value="8" />08</td></tr>
<tr>  <td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck9" value="9" />09</td>
<td align="center"><input type="checkbox" name="ck10" value="10" />10</td>
<td align="center"><input type="checkbox" name="ck11" value="11" />11</td></tr>
<tr><td align="center"><input type="checkbox" name="ck12" value="12" />12</td>
  <td align="center"><input type="checkbox" name="ck13" value="13" />13</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck14" value="14" />14</td>
<td align="center"><input type="checkbox" name="ck15" value="15" />15</td>
<td align="center"><input type="checkbox" name="ck16" value="16" />16</td></tr>
<tr><td align="center"><input type="checkbox" name="ck17" value="17" />17</td>
<td align="center"><input type="checkbox" name="ck18" value="18" />18</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck19" value="19" />19</td>
<td align="center"><input type="checkbox" name="ck20" value="20" />20</td>
<td align="center"><input type="checkbox" name="ck21" value="21" />21</td></tr>
<tr><td align="center"><input type="checkbox" name="ck22" value="22" />22</td>
  <td align="center"><input type="checkbox" name="ck23" value="23" />23</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck24" value="24" />24</td>
<td align="center"><input type="checkbox" name="ck25" value="25" />25</td>
<td align="center"><input type="checkbox" name="ck26" value="26" />26</td></tr>
<tr><td align="center"><input type="checkbox" name="ck27" value="27" />27</td>
  <td align="center"><input type="checkbox" name="ck28" value="28" />28</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck29" value="29" />29</td>
<td align="center"><input type="checkbox" name="ck30" value="30" />30</td>
<td align="center"><input type="checkbox" name="ck31" value="31" />31</td></tr>
<tr><td align="center"><input type="checkbox" name="ck32" value="32" />32</td>
  <td align="center"><input type="checkbox" name="ck33" value="33" />33</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck34" value="34" />34</td>
<td align="center"><input type="checkbox" name="ck35" value="35" />35</td>
<td align="center"><input type="checkbox" name="ck36" value="36" />36</td></tr>
<tr><td align="center"><input type="checkbox" name="ck37" value="37" />37</td>
  <td align="center"><input type="checkbox" name="ck38" value="38" />38</td><td align="center">&nbsp;</td>
<td align="center"><input type="checkbox" name="ck39" value="39" />39</td>
<td align="center"><input type="checkbox" name="ck40" value="40" />40</td>
<td align="center"><input type="checkbox" name="ck41" value="41" />41</td></tr>
<tr><td align="center"><input type="checkbox" name="ck42" value="42" />42</td>
  <td align="center"><input type="checkbox" name="ck43" value="43" />43</td>
  <td align="center"><input type="checkbox" name="ck44" value="44" />44</td>
<td align="center"><input type="checkbox" name="ck45" value="45" />45</td>
<td align="center"><input type="checkbox" name="ck46" value="46" />46</td>
<td align="center"><input type="checkbox" name="ck47" value="47" />47</td></tr>

<tr><td colspan="8" align="center"><input style="color:#FFFFFF; background-color:#0099FF; width:80px; height:25" type="submit" value="Book" name="b" /> 
&nbsp;&nbsp;&nbsp;<a style="border:medium; text-align:center; padding-top:3px; color:#FFF; text-decoration:none; background-color:#0099FF; width:50px; height:25;" href="profile.php?id=<?php echo $uid;?>">Profile</a></td></tr>
<tr><td colspan="9" align="center" bgcolor="#000000" style="font-family:Verdana, Geneva, sans-serif; size:3px; color:#FFF; padding-top:20px; padding-bottom:20px">
RSRTC © 2011 All rights reserved
</td></tr>
<tr><td></td></tr>
</table>
</form>
<?php
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</body>
</html>

