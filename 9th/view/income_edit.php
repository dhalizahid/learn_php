<?php 
	include('Model/class.db.php');
	include('Model/IncomeCategory.php');
	 $incomeCategory= new IncomeCategory();
	 $categoris=$incomeCategory->getAll();
 ?>
<form action="controller/Income.php" method='POST' encdatatype="multipart/form-data">
	<h3>Income Update Page</h3>
	
	<?php echo $categoris) ?>
	<select name="catagory_id" id="catagory_id" required>
		<option value="">Select Category</option>
		<?php foreach ($categoris as $category) {?>
			<option value="<?php echo $category['id']; ?>"<?php if ($_REQUEST['categoryid'] == $catagory['id']){ ?>
				selected;
				<?php }?> >
				<?php echo $category['catagory_id'];?>
			</option>
		<?php } ?>
	</select>
	<input type="text" name="amount"  value="<?php echo $_REQUEST['amount'];?>">
	<input type="text" name="description" value="<?php echo$_REQUEST['description'];?>">
	<input type="date" name="incame_date"                                   value="<?php echo $_REQUEST['incame_date'];?>">
	<input type="submit" name="submit" value="Update Income">
</form>
