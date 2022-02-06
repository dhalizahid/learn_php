<?php 
	include('Model/class.db.php');
	include('Model/ExpenseCategory.php');
	$GetFace = new Expense();
	$GetData=$GetFace->getAll();
 ?>
<form action="controller/ExpenseCategory.php" method='POST' encdatatype="multipart/form-data">
	<h3 align="center">Expence Category Page</h3>
	<input type="text" name="object" placeholder="Object">
	<input type="date" name="date">
	<input type="text" name="taka" placeholder="Taka">
	<input type="submit" name="submit" value="Add Expense Category">
</form>
<table border="1px solid black">
	<thead>
		<tr>
			<td>Id</td>
			<td>Object</td>
			<td>Date</td>
			<td>Taka</td>
			<td>Operation</td>
		</tr>
		<tr>
			<td colspan="6"><a href="controller/ExpenseCategory.php?action=all_delete">All Data Delete</a></td>
		</tr>
	</thead>
	<tbody>
		<?php 
			if (is_null($GetData)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}

			foreach($GetData as $Category) {?>
			<tr>
				<td><?php echo $Category['id'];?></td>
				<td><?php echo $Category['object']; ?></td>
				<td><?php echo $Category['date']; ?></td>
				<td><?php echo $Category['taka']; ?></td>
				<td>
					<a href="controller/ExpenseCategory.php?action=edit&id=<?php echo $Category['id']; ?>">Edit</a>

					<a href="controller/ExpenseCategory.php?action=delete&id=<?php echo $Category['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

