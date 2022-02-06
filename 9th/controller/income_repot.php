<?php
	session_start();
	include('../Model/class.db.php');
	include('../Model/Income.php'); 
	if (isset($_REQUEST['submit']) && $_REQUEST['submit'] == 'View Report'){

		$from_date = $_POST['from_date'];

		$to_date   = $_POST['to_date'];

		$Income = new Income();

		$result = $Income->repot_search($from_date,$to_date);
		$_SESSION['result'] = $result;
		header("location:../index.php?view=income_repot");
	}
 ?>