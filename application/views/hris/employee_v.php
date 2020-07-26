<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<b><?php echo $title; ?></b><br>
	<?php echo $sub_title .' 25-Jul-2020'; ?><hr>

	<form method="post" id="form_employee" action="<?php echo base_url('index.php/hris/employee/save_master')?>">
		Emp ID :<input type="text" name="emp_id"  id="emp_id" value=""><br>
		Emp Name :<input type="text" name="emp_name"  id="emp_name" value=""><br>

		<button>SAVE</button>
	</form>


</body>
</html>