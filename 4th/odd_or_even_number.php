<?php 
	$odd_numbers =[];
	$even_numbers =[];
	for ($i=0; $i <=100 ; $i++) { 
		if ($i%2 == 0) {
			array_push($even_numbers,$i);
		}
		else{
			array_push($odd_numbers,$i);
		}
	}
	foreach ($even_numbers as $number) {
		echo $number.'<br>';
	}
 ?>