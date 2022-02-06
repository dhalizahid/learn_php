<?php 
	include('Model/class.db.php');
	include('Model/IncomeCategory.php');
	 $incomeCategory= new IncomeCategory();
	 $categoris=$incomeCategory->getAll();
 ?>
 <style>	
 		.input{
 			outline: none;
 			height: 25px;
 			border-color: #88cb88;
 		}
 		select{
 			outline: none;
 			height: 31px;
 			width: 200px;
 			border-color: #88cb88;
 		}
 		.btn{
 			height: 31px;
 			background-color:green;
 			border: none;
 			padding: 2px 10px;
 			cursor: pointer;
 			border-radius: 5px;
 		}


 </style>	
<h1>This is income page</h1>
<form action="controller/Income.php" method='POST' encdatatype="multipart/
form-data">
	<h3>Income Page</h3>
	<select name="catagory_id" id="catagory_id" required>
		<option value="">Select Category</option>
		<?php foreach ($categoris as $category) {?>
			<option value="<?php echo $category['id']; ?>">
				<?php echo $category['name'];?>
			</option>
		<?php } ?>
	</select>
	<input type="text" class="input" name="amount" placeholder="Amount">
	<input type="text" class="input" name="description" placeholder="Description">
	<input type="date" class="input" name="incame_date" placeholder="incame_date">
	<input class="btn" type="submit" name="submit" value="Add Income">
</form>
<!-- <a href="view/income_table.php">Income Table</a> -->

