<?php 
	include('../Model/IncomeCategory.php');
	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income') {
		$data = [
			'catagory_id'=> $_POST['catagory_id'],
			'amount'     => $_POST['amount'],
			'description'=> $_POST['description'],
			'incame_date'=> $_POST['incame_date'],
		];
		$Income = new Income();
		try {
			$Income->store($data);
			header('location:../index.php?view=Income');
		} catch (Exception $e) {
			echo $e->getMessage();
		}


	}
 ?>

 Ascending 1	
	

