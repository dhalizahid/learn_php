<?php
	// use app\abstract;
	// name space used composer 
	 require'namespace.php';
	use app\nation as bangladesi;
	$obj = new bangladesi();
	$obj->name = 'zahid';
	$result=$obj->getNationName();
	echo $result;

