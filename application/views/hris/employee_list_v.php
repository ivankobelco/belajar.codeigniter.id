<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<b>Day #1 - 25-Jul-2020</b><br>
	<?php echo $title . '-'.$sub_title; ?><hr>

	<table border="1">
		<tr>
			<th>No</th>
			<th>EMP ID</th>
			<th>EMP Name</th>
			<th>D of Birth</th>
			<th colspan="2">Action</th>
		</tr>

		<?php 

			$i=1;
			foreach ($emp_list->result() as $rows) {
		?>

		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $rows->emp_id;?></td>
			<td><?php echo $rows->emp_name;?></td>
			<td><?php echo date_format(date_create($rows->d_of_birth),'d-M-Y');?></td>
			<td width="200"><?php echo number_format($rows->kode_pos,2);?></td>
			<td><a href="<?php echo base_url('index.php/hris/employee/edit_master?emp_id=');?><?php echo $rows->emp_id;?>">Edit</a></td>
			<td><a href="<?php echo base_url('index.php/hris/employee/delete_master?emp_id=');?><?php echo $rows->emp_id;?>">Delete</a></td>

			<td></td>
		</tr>

		<?php 
			$i++;
		}; ?>
	</table>
</body>
</html>