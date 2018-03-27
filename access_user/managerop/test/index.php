<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select / Deselect All Checkboxes with jQuery</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$('document').ready(function()
{
	$(".select-all").click(function () 
	{
		$('.chk-box').attr('checked', this.checked)
	});
		
	$(".chk-box").click(function()
	{
		if($(".chk-box").length == $(".chk-box:checked").length) 
		{
			$(".select-all").attr("checked", "checked");
		} 
		else 
		{
			$(".select-all").removeAttr("checked");
		}
	});
});
</script>
<style type="text/css">

ul, li
{
	line-height:30px;
	list-style:none;
}

</style>
</head>

<body>

<form method="post">
<ul>
	<li><label><input type="checkbox" class="select-all" /> Select / Deselect All</label></li>
    <li><input type="checkbox" name="chk[]" class="chk-box" value="PHP" /> PHP</li>
    <li><input type="checkbox" name="chk[]" class="chk-box" value="Ajax" /> Ajax</li>
    <li><input type="checkbox" name="chk[]" class="chk-box" value="jQuery" /> jQuery</li>
    <li><input type="checkbox" name="chk[]" class="chk-box" value="Android" /> Android</li>
    <li><input type="checkbox" name="chk[]" class="chk-box" value="XML" /> XML</li>
    <li><button type="submit" name="save">submit</button></li>
</ul>
</form>

<ul>
<?php

if(isset($_POST['save']))
{
	if(isset($_POST['chk'])=="")
	{
		echo "please select at least one";
	}
	else
	{
		echo "You have Selected : ";
		foreach($_POST['chk'] as $languages)
		{
			?>
            <li><?php echo $languages; ?></li>
			<?php
		}	
	}
}

?>
</ul>
<br />
</body>
</html>