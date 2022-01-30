<?php 
   $number =[];
 for($i=0;$i<=100;$i++){
    if($i%5 == 0){
        array_push($number,$i);
    }
 }
 foreach($number as $number1)
    echo $number1."<br>";
 ?>