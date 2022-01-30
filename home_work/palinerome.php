<?php 
	$num = 111;
	$p=$num;
	$revnum = 0;
	while($num != 0)
	{
		$revnum = $revnum * 10 + $num % 10;
		$num = (int)($num / 10); 
	}
	 
	if($revnum==$p){
		echo $p." is Palindrome number";
	}
	else{
		echo $p." is not Palindrome number";
	}
	echo "<br>";

	
	// system tow
	$number=121;
	$array=str_split($number);
	$array_rev=[];
	$size=sizeof($array);
	for ($i=$size-1; $i >=0 ; $i--) { 
		array_push($array_rev, $array[$i]);
	}
	if ($array == $array_rev){ 
		echo "{$number} Palindrome";
	}
	else{
		echo "{$number} not Palindrome";
	}
 ?>