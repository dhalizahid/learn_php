<?php 
	$view = $_REQUEST["view"]??'';

	include('view/header.php');
	
	switch ($view) {
		case 'income':
				include('view/Income.php');
				break;
		case 'income_category':
				include('view/IncomeCategory.php');
				break;
		case 'income_category_edit':
			include('view/income_category_edit.php');
			break;
		case 'income_edit':
			include('view/income_edit.php');
			break;
		case 'expense_category':
				include('view/expense_category.php');
				break;
		case 'expense_category_edit':
				include('view/expense_category_edit.php');
				break;	
		case 'income_table':
				include('view/income_table.php');
				break;
		case 'income_repot':
				include('view/income_repot.php');
				break;	
		default:
			include('view/home.php');
			break;
	}
	include('view/footer.php');
 ?>