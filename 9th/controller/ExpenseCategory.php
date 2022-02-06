<?php 
	include('../Model/class.db.php');
	include('../Model/ExpenseCategory.php');
	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Expense Category') {
		$data=[
			'object'=> $_POST['object'],
			'date'=> $_POST['date'],
			'taka'=> $_POST['taka'],
		];
		$expense = new Expense();
		try {
			$expense->store($data);
			// var_dump($data);
			header('location:../index.php?view=expense_category');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit'){
		$id = $_REQUEST['id'];
		$expense = new Expense();
		$result  = $expense->getByPk($id);
		echo $object = $result[0]['object'];
		echo $date 	 = $result[0]['date'];
		echo $taka   = $result[0]['taka'];

		header('location:../index.php?view=expense_category_edit&id='.$id.'&object='.$object.'&date='.$date.'&taka='.$taka);
	}
	
	if (isset($_POST['submit']) && $_POST['submit']== 'Update Expense') {
		$id = $_POST['id'];
		$data=[
			'object' => htmlspecialchars($_POST['object']),
			'date' 	 => htmlspecialchars($_POST['date']),
			'taka' 	 => htmlspecialchars($_POST['taka']),
		];
		try {
			$expense = new Expense();
			$expense->update($data,$id);
			header('location:../index.php?view=expense_category');
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete'){
		$id 	= $_REQUEST['id'];
		$expense= new Expense();
		$result = $expense->deleteByPk($id);

		header('location:../index.php?view=expense_category');
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'all_delete'){
		$expense = new Expense();
		$result  = $expense->delete();
		header('location:../index.php?view=expense_category');
	}
 ?>