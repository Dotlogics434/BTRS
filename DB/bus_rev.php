

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Online Bus-Ticket Reservation ::</title>
<!--<link rel="stylesheet" href="style.css" />-->
<style>

.table tr td {
	border-bottom-width: 0px;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-right-style: outset
	border-right-color: darkred;
	border-bottom-color: darkred;
}

.table {
	background-color:#FFF;
	border-left-width: 1px;
	border-top-width: 1px;
	border-left-style: outset;
	border-top-style: solid;
	border-left-color: darkred;
	border-top-color: darkred;
	font-size: 16px;
	background-color:#FFCCFF;
	margin-top:0px;
	vertical-align:top;
	alignment-adjust:central;
	width:800px;
	padding-left:5px;
}
</style>

</head>

<body topmargin="0" bottommargin="0">
<div align="center" style="width:800; vertical-align:bottom">
<embed src="banner3.swf" quality="high" type="application/x-shockwave-flash" wmode="transparent" width="795" height="150" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always"></embed>
</div>

<table class="table" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
<tr><td colspan="7" bgcolor="#330000" align="center" height="3px">
<h2 style="text-align:center; color:#FFFFFF; font-family:Verdana, Geneva, sans-serif; margin-top:3px">

Welcome To Online Bus-Ticket Reservation</h2></td></tr>

<tr bgcolor="#FFFFFF"><td colspan="7" bgcolor="#CC6600" align="center" style="color:#FFFFCC; font-size:14px">
|| <b><?php echo date("D d-M-Y");?></b> ||</td></tr>

<tr bgcolor="#FFFFFF" style="padding-left:0px;"><td bgcolor="#FFFFFF" style="margin-bottom:0px; margin-top:0px" colspan="2">
<h3 align="center" style="background-color:#CC0000; color:#FFF;">Please Fill Your Details Here</h3></td>

<td bgcolor="#FFFFF" align="center" style="color:maroon; font-size:18px; font-weight:bold; colspan="1">
 <span >TIME: - </span>
 <span display:table" id="clock">

		
		<script type="text/javascript">
			var lastText = "";
			
			function updateClock() {
				var d = new Date();
				var s = "";
				s += (10 > d.getHours()   ? "0" : "") + d.getHours()   + ":"
				s += (10 > d.getMinutes() ? "0" : "") + d.getMinutes() + ":"
				s += (10 > d.getSeconds() ? "0" : "") + d.getSeconds();
				
				if (lastText != s) {
					setText("clock", s);
					lastText = s;
				}
				
			}
			
			function setText(elemName, text) {
				var elem = document.getElementById(elemName);
				while (elem.childNodes.length > 0)
					elem.removeChild(elem.firstChild);
				elem.appendChild(document.createTextNode(text));
			}
			
			updateClock();
			setInterval(updateClock,100);
		</script>
<script language="JavaScript" type="text/javascript">
 var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December"); 

var TODAY =d.getDate() +"- " + monthname[d.getMonth()] + "-" + d.getFullYear();

 document.write(TODAY);
</script>
</span>
</td> </tr>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="f2">
<tr bgcolor="#FFFFFF"><td bgcolor="#FFFFFF" width="160" style="font-family:Verdana, Geneva, sans-serif">Username:</td><td> <input type="text" name="name" style="width:170px" /></td>
<td bgcolor="#FFFFFF" rowspan="9">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="512" height="477">
  <param name="movie" value="slide2.swf" />
  <param name="quality" value="high" />
  <param name="allowFullScreen" value="true" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
  <embed src="slide2.swf"
         quality="high"
         type="application/x-shockwave-flash"
         WMODE="transparent"
         width="512"
         height="477"
         allowFullScreen="true"
         pluginspage="http://www.macromedia.com/go/getflashplayer"
         allowScriptAccess="always" />
</object>


</td>
</tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Gender:</td><td> <p style="font-family:Verdana, Geneva, sans-serif;"><input type="Radio" name="submit" value="Male" />
Male <input type="radio" name="submit" value="Female" />Female</p></td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Date of Birth:</td><td>

<select name="day" id="day" class="html-select"><option value="" selected="selected">Day</option>
								<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option></select>
							<select name="month" id="month" class="html-select"><option value="" selected="selected">Month</option>
								<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option></select>
							<select name="year" id="year" class="html-select"><option value="" selected="selected">Year</option>
								<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option></select>


</td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Mobile No:</td><td> <input style="width:170px" type="number" name="mo" /></td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Address:</td><td> 
<textarea style="background-color:#FFC; font-family:Verdana, Geneva, sans-serif" cols="22" rows="4" name="add"></textarea></td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Pin code:</td><td> <input style="width:170px" type="text" name="pin" /></td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Email:</td><td> <input style="width:170px" type="text" name="email" /></td></tr>
<tr bgcolor="#FFFFFF"><td width="160" style="font-family:Verdana, Geneva, sans-serif">Password:</td><td> <input style="width:170px" type="password" name="pass" /></td></tr>
<tr bgcolor="#FFFFFF"><td colspan="2" align="left"><hr style="padding:0px;" /> <input type="submit" value="SUBMIT" name="s1" /> &nbsp;&nbsp;&nbsp;<input type="reset" value="RESET" /><hr style="padding:0px" /></td></tr></form>


</table>
<div align="center" style="width:803; position:static"><img align="top" width="801" src="images1/footer.jpg" />
</div>
<?php
if(isset($_POST['s1'])){
	$name = $_POST['name'];
	@$gender = $_POST['submit'];
	$x = $_POST['day'];
	$y = $_POST['month'];
	$z = $_POST['year'];
	$dob = $z."-".$y."-".$x;
	$mobile = $_POST['mo'];
	$address = $_POST['add'];
	$pin_code = $_POST['pin'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$date = date('Y-m-d');
	
	$sql = mysql_connect("localhost","root","");
	$re = mysql_select_db('bus_rev');
	
	if($name =='' || $gender =='' || $dob =='' || $mobile =='' || $address =='' || $pin_code =='' || $email =='' || $password =='' || $date =='' ){
	?>
    <script>
	alert('Please fill all the enteries');
	</script>
	<?php
	}
	
	$sql2 = mysql_query("select * from register where email='$email'");
	if(mysql_num_rows($sql2)==0)
	{
	$a = "insert into register(name,gender,dob,mobile,address,pin_code,email,password,reg_date)values('".$name."','".$gender."','".$dob."','".$mobile."','".$address."','".$pin_code."','".$email."','".$password."','".$date."')";
	$c= mysql_query($a);
	
	$id = mysql_insert_id();
	
	$history = $id.'user_history';
	
	//$sql1 = mysql_query("CREATE TABLE $history(`id` INT NOT NULL AUTO_INCREMENT ,`from` VARCHAR( 120 ) NOT NULL ,`to` VARCHAR( 120 ) NOT NULL ,`journey_date` DATE NOT NULL ,`booking_date` DATE NOT NULL ,`seats_booked` INT NOT NULL ,`dept_time` TIME NOT NULL ,`distance` INT NOT NULL ,PRIMARY KEY ( `id` ) ) ENGINE = MYISAM ;");
	
	echo "You are Registered Successfully";
	header("Location:indexm.php");
	}
	
	else
	{
		?>
        <script>
		alert("This email id is already registered");
		</script>
        <?php
		
	}}
?>


</body>
</html>
