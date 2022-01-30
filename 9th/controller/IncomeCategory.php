<?php 
	// include('../Model/class.db.php');
	include('../Model/IncomeCategory.php');
	if (isset($_POST['submit']) && $_POST['submit']== 'Add Category') {
		$data =[
			'name'=>$_POST['name']
		];
		$IncomeCategory = new IncomeCategory();
		try {
			$IncomeCategory->store($data);
			header('location:../index.php?view=IncomeCategory');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}
 ?>