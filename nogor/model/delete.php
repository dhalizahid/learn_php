<?php 
	include('Db.php');
	if (isset($_REQUEST['action']) && $_REQUEST['action']== 'delete') {
		$id = $_REQUEST['id'];

		$query = "DELETE FROM user WHERE id ='$id'";
		$result = mysqli_query($connection,$query);
		if (!$result) {
			echo"Delete Error";
		}
		else{
			header('location:../index.php?model=list');
		}
	}
 ?>