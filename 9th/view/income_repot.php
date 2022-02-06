<?php 
	session_start();
	// include('Model/class.db.php');	
	// include('Model/Income.php');
	// $Income = new Income();
	// $report = $Income->repot_get($from_date,$to_date);
	
 ?>
<form action="controller/income_repot.php" method="POST" enctype="multipart/form-data">
	<label for="from_date">From Date:</label>
	<input type="date" name="from_date">

	<label for="to_date">To Date:</label>
	<input type="date" name="to_date">
	<input type="submit" name="submit" value="View Report">
</form>

<?php $datas = $_SESSION['result']; ?>
<table>
	<table border="1px solid black">
	<thead>
		<tr>
			<td>Id</td>
			<td>Catagory Id</td>
			<td>Amount</td>
			<td>Description</td>
			<td>Incame Date</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			// if (is_null($report)) {
			// 	echo "<tr><td colspan='3' rowspan='' headers=''>No data in table</td></tr>";
			// }
			foreach($datas as $category) {?>
			
			<tr>
				<td><?php echo $category['id'];?></td>
				<td><?php echo $category['catagory_id']; ?></td>
				<td><?php echo $category['amount']; ?></td>
				<td><?php echo $category['description']; ?></td>
				<td><?php echo $category['incame_date']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
