<?php 
	include('libs/class.db.inc');
	include('libs/class.income_category.inc');

	$IncomeCategory = new income_category();

	if (isset($_POST['submit']) && $_POST['submit'] == 'Add income category') {
		$data = ['name' => $_POST['name']];
		
		try {
			$IncomeCategory->create($data);
		} catch (Exception $e) {
			echo $e->getMessage();	
		}
	}
	$IncomeCategory_face = $IncomeCategory->get_all();
	// var_dump($IncomeCategory_face);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="income catagory name" required>
		<input type="submit" name="submit" value="Add income category">
	</form>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($IncomeCategory_face as $Catagory) { ?>
			<tr>
				<td><?php echo $Catagory['id'] ;?></td>
				<td><?php echo $Catagory['name']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>