<?php 
	$name = 'zahid hossain';
	$array = str_split($name);
	// $array = strrev($name);
	$size = sizeof($array);
	$reverse_array = [];
	for ($i=$size-1; $i >=0 ; $i--) { 
		array_push($reverse_array,$name[$i]);
	}
	// ($reverse_array);
	$name_pr=sizeof($reverse_array);
	for ($i=0; $i <$name_pr ; $i++) { 
		echo $reverse_array[$i];
	}
	
	// $time_start = microtime(true); 
	// for($i=0; $i<10000; $i++){
	// }
	
	// $time_end = microtime(true); 
	// $execution_time = ($time_end - $time_start);
	// echo '<b>Total Execution Time:</b> '.$execution_time.' s';

	// echo "<br>";
	// $m=555;
	printf("your amount"."%07d",$m);
	
 ?>