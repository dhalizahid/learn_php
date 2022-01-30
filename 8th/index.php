<?php 
	include('libs/class.db.inc');
	include('libs/class.income_category.inc');
	
	$IncomeCategory = new income_category();
	$data = ['name' => 'Monthly Salary'];
	$IncomeCategory->create($data); 
	// try {
	// 	$Db=new db;
	// } catch (Exception $e) {
	// 	echo $e->getMessage();
	// }
 ?>