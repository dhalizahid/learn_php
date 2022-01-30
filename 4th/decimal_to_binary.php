<?php 
	$number=30;
	$reminder_array=[];

	while ($number > 0) {
		$reminder = $number%2;
		array_push($reminder_array, $reminder);
		$number= intval($number/2);
	}
	$reminder_array = array_reverse($reminder_array);
	$size = sizeof($reminder_array);
	$binary='';
	for ($i=0; $i < $size ; $i++) { 
		$binary = $binary.$reminder_array[$i];
	}
	echo $binary;
	echo "<br>";
	// 1 Decimal 		= 10(0-9)		
	// 2 Octal  		= 8 (0-7)		
	// 3 Hexa_Decimal  = 16 (0-9 A-F)	
	// 4 Binary 	 	= 2(0,1)
	// 2|23									
	 // 	---------------									
	 // 	2|11 --1									
	 // 	-------------									
	 // 	2|5--1									
	 // 	-------------
	 // 	2|2--1
	 // 	-------------
	 // 	2|1--0
	 // 	-------------
	 // 	0-1	
	// output prime number
	// $number1=18;
	// $is_prime= TRUE;
	// for ($i=2; $i <$number1 ; $i++) { 
	// 	if ($number1%$i ==0){ 
	// 		$is_prime= FALSE;
	// 		break;
	// 	}
	// }
	// if($is_prime==TRUE)
	// 	echo $number1."is a prime number";
	// else
	// 	echo $number1."is not a prime number";

 ?>										
