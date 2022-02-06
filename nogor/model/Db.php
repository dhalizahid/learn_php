<?php
	$surverName='localhost';
	$userName	= 'root';
	$pass		= '';
	$db			='project';

	$connection= mysqli_connect($surverName,$userName,$pass,$db);
	if (!$connection) {
		die('Connection Error'. mysqli_connect_error());
	}
?>