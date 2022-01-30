<?php 
	$prime_number=[];
	for ($i=1; $i <100 ; $i++) { 
		for ($j=2; $j <$i ; $j++) { 
			if ($i % $j ==0) {
				$status = FALSE;
				break;
			}
			else{
				$status = TRUE;
			}
		}
		if ($status == TRUE)
			array_push($prime_number,$i);
	}
	// print_r($prime_number);
	$size= sizeof($prime_number);
	for ($i=0; $i <$size ; $i++) { 
		echo $prime_number[$i].'<br>';
	}
 ?>