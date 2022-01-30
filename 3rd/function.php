<?php
// start  
	// User define function 
	$name =" zahid hossain";
	function callName(){
		function inner parenthasis local variable  
		function outer parenthasis global variable
		// **** function public or protected class decclear next class discas 
		$name='zahid hossain';
		global $name;
		// used global function global variabe used local variable 
		echo $name;
	}
		callName();
		echo"<br>";
		// callName();
		//  // Built in function 
		// print_r('Hello Word');
		// echo "How are you";
		// var_dump('hi hello');
											// -> defult para miter
		function print_name($Name,$Name1,$Name2 ="brather"){ /*->para miter*/
			// frist system
			// echo $Name;
			// 2nd system 
			//echo "Hello ".$Name;
			// 3rd system
				echo "Hello {$Name} {$Name1} {$Name2} ";
		}
		$Name 	="shorif";
		$Name1 	="How are you";
		$Name2 	="what do you do";
		print_name($Name,$Name1,$Name2); /*->a=Name is Argument */

		
	// end 
	// start 
		// odd and even calculation program
		// tow number sum program
		echo "<br>";
		function sum($number1,$number2){
			$Result= $number1+$number2;
			return $Result;
		}
		function oddoreven($number){
			if ($number%2==0) 
				return 'Even Number';
			else
				return 'Odd Number';
		}
		// $summary = sum(15,12);
		// $Result  = oddoreven($summary);
		// echo $Result;

		// short system 
		echo oddoreven(sum(11,11));
		echo "<br>";
		// end 
		// start 
		// *******next class learn anunimas function
		$sub = function($num1,$num2){
					return $num1 - $num2;
				};
				echo $sub(30,5);

 ?>