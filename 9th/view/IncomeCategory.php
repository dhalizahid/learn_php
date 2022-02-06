<?php 
	include('Model/class.db.php');
	include('Model/IncomeCategory.php');
	$GetFace = new IncomeCategory();
	$GetData=$GetFace->getAll();
 ?>
<form action="controller/IncomeCategory.php" method='POST' encdatatype="multipart/form-data">
	<h3>Income Category Page</h3>
	<input type="text" name="name" placeholder="Income Category">
	<input type="submit" name="submit" value="Add Category">
</form>
<table border="1px solid black">
	<thead>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Operation</td>
		</tr>
		<tr>
			<td colspan="3"><a href="controller/IncomeCategory.php?action=all_delete">All Data Delete</a></td>
		</tr>
	</thead>
	<tbody>
		<?php 
			if (is_null($GetData)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}
			foreach($GetData as $Category) {?>
			
			<tr>
				<td><?php echo $Category['id']; ?></td>
				<td><?php echo $Category['name']; ?></td>
				<td>
					<a href="controller/IncomeCategory.php?action=edit&id=<?php echo $Category['id']; ?>">Edit</a>

					<a href="controller/IncomeCategory.php?action=delete&id=<?php echo $Category['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>