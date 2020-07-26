<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<b>Day #1 - 25-Jul-2020</b><br>
	<?php echo $title . '-'.$sub_title; ?><hr>


	<?php 
		foreach ($emp_data->result() as $rows) {
	?>

	<form method="post" id="form_employee" action="<?php echo base_url('index.php/hris/employee/update_master')?>">
		Emp ID :<input type="text" name="emp_id"  id="emp_id" value="<?php echo $rows->emp_id;?>" readonly><br>
		Emp Name :<input type="text" name="emp_name"  id="emp_name" value="<?php echo $rows->emp_name;?>"><br>

		<button>UPDATE</button>
	</form>

	<?php 
		}; 
	?>


</body>
</html>