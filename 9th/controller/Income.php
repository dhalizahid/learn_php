<?php 
	include('../Model/class.db.php');
	include('../Model/Income.php');
	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income') {
		$data=[
			'catagory_id'=> $_POST['catagory_id'],
			'amount'     => $_POST['amount'],
			'description'=> $_POST['description'],
			'incame_date'=> $_POST['incame_date'],
		];
		$Income = new Income();
		try {
			$Income->store($data);
			// var_dump($data);
			header('location:../index.php?view=income');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit'){
		$id 	= $_REQUEST['id'];
		$Income = new Income();
		$result = $Income->getByPk($id);
		echo $catagory_id = $result[0]['catagory_id'];
		echo $amount 	  = $result[0]['amount'];
		echo $description = $result[0]['description'];
		echo $incame_date = $result[0]['incame_date'];

		header('location:../index.php?view=income_edit&id='.$id.'&catagory_id='.$catagory_id.'&amount='.$amount.'&description='.$description.'&incame_date='.$incame_date);
	}
	
	if (isset($_POST['submit']) && $_POST['submit']== 'Update Income') {
		$id = $_POST['id'];
		$data=[
			'catagory_id' => htmlspecialchars($_POST['catagory_id']),
			'amount' 	  => htmlspecialchars($_POST['amount']),
			'description' => htmlspecialchars($_POST['description']),
			'incame_date' => htmlspecialchars($_POST['incame_date']),
		];
		try {
			$Income = new Income();
			$Income->update($data,$id);

			header('location:../index.php?view=income');
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete'){
		$id 	= $_REQUEST['id'];
		$Income = new Income();
		$result = $Income->deleteByPk($id);

		header('location:../index.php?view=income');
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'all_delete'){
		$Income = new Income();
		$result = $Income->delete();
		header('location:../index.php?view=income');
	}
	
 ?>


	

