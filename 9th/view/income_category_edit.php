<form action="controller/IncomeCategory.php" method='POST' encdatatype="multipart/form-data">
	<h3>Income Category Edit Page</h3>
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
	<input type="text" name="name" placeholder="Income Category" value="<?php echo $_REQUEST['name'];?>">
	<input type="submit" name="submit" value="Update Income Category">
</form>