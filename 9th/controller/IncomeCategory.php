<?php 
	include('../Model/class.db.php');
	include('../Model/IncomeCategory.php');
	if (isset($_POST['submit']) && $_POST['submit']== 'Add Category'){
		$data =[
			'name'=>$_POST['name']
		];
		// var_dump($data);
		$IncomeCategory = new IncomeCategory();
		try {
			$IncomeCategory->store($data);
			header('location:../index.php?view=income_category');
		} 
		catch (Exception $e){
			echo $e->getMessage();
		}
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit'){
		$id = $_REQUEST['id'];
		$IncomeCategory = new IncomeCategory();
		$result = $IncomeCategory->getByPk($id);
		echo $name = $result[0]['name'];

		header('location:../index.php?view=income_category_edit&id='.$id.'&name='.$name);
	}
	
	if (isset($_POST['submit']) && $_POST['submit']== 'Update Income Category') {
		$id = $_POST['id'];
		$data=[
			'name' => htmlspecialchars($_POST['name']),
		];
		try {
			$IncomeCategory = new IncomeCategory;
			$IncomeCategory->update($data,$id);

			header('location:../index.php?view=income_category');
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
	
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete'){
		$id = $_REQUEST['id'];
		$IncomeCategory = new IncomeCategory();
		$result = $IncomeCategory->deleteByPk($id);

		header('location:../index.php?view=income_category');
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'all_delete'){
		$IncomeCategory = new IncomeCategory();
		$result = $IncomeCategory->delete();
		header('location:../index.php?view=income');
	}
 ?>