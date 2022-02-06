<?php 
	include('Model/class.db.php');	
	include('Model/Income.php');
	$getFace = new Income();
	$getData=$getFace->getAll();
	// var_dump($getData);
 ?>

 <table border="1px solid black">
	<thead>
		<tr>
			<td>Id</td>
			<td>Catagory Name</td>
			<td>Amount</td>
			<td>Description</td>
			<td>Incame Date</td>
			<td>Operation</td>
		</tr>
		<tr>
			<td colspan="6"><a href="controller/Income.php?action=all_delete">All Data Delete</a></td>
		</tr>
	</thead>
	<tbody>
		<?php 
			if (is_null($getData)) {
				echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			}
			foreach($getData as $category) {?>
			<tr>
				<td><?php echo $category['id'];?></td>
				<td><?php echo $category['catagory_id']; ?></td>
				<td><?php echo $category['amount']; ?></td>
				<td><?php echo $category['description']; ?></td>
				<td><?php echo $category['incame_date']; ?></td>
				<td>
					<a href="controller/Income.php?action=edit&id=<?php echo $category['id']; ?>">Edit</a>

					<a href="controller/Income.php?action=delete&id=<?php echo $category['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
