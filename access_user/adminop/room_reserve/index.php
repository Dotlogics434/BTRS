
<head>
<title>validate customer data</title>
<link rel="stylesheet" href="update_style.css"/>
<link rel="stylesheet" href="update_styler.css"/>

<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript">
function delete_confirm(){
	var result = confirm("Are you sure to validate users?");
	if(result){
		return true;
	}else{
		return false;
	}
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
});
</script>
</head>

<body>
<?php session_start(); if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php
include_once('dbConfig.php');
$query = mysqli_query($conn,"SELECT * FROM ticket_reservation");
?>
<form class="form-container">
<form name="bulk_action_form" action="action.php" method="post" onSubmit="return delete_confirm();"/>
    <table class="bordered">
        <thead>
        <tr>
            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
            <th>User Name</th>
            <th>Bus ID</th>
            <th># of Seats</th>
            <th>Status</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['userid']; ?>"/></td>        
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['busid']; ?></td>
            <td><?php echo $row['numberofseats']; ?></td>
            <td><?php echo $row['validate_status']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_update_submit" value="Update"/>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
</form>
</body>

</html> 