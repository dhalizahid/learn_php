<form action="controller/ExpenseCategory.php" method='POST' encdatatype="multipart/form-data">
	<h3>Expense Update Page</h3>
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
	<input type="text" name="object" value="<?php echo$_REQUEST['object'];?>">
	<input type="date" name="date"  value="<?php echo $_REQUEST['date'];?>">
	<input type="text" name="taka" value="<?php echo $_REQUEST['taka'];?>">
	<input type="submit" name="submit" value="Update Expense">
</form>
