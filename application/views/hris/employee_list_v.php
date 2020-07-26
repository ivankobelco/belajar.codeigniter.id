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
			<th>Remark</th>
		</tr>

		<?php 

			$i=1;
			foreach ($emp_list->result() as $rows) {
		?>

		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $rows->emp_id;?></td>
			<td><?php echo $rows->emp_name;?></td>
			<td></td>
			<td></td>
		</tr>

		<?php 
			$i++;
		}; ?>
	</table>
</body>
</html>