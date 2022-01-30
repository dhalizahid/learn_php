<?php 
	$view = $_REQUEST["view"];
	include('view/header.php');
	switch ($view) {
		case 'income':
				include('view/Income.php');
				break;
		case 'income_category':
			include('view/IncomeCategory.php');
			break;
		case 'expense_category':
				include('view/expense_category.php');
				break;	
		default:
			include('view/home.php');
			break;
	}
	include('view/footer.php');
 ?>