<?php
    // $name =null;

    // if(!is_null($name)){
    //     echo"this is not a null vallu";
    // }
    // else
    // echo"this is null vallu";
    $fristName  = 'zahid';
    $lastName   = 'hossain';
    // used the GET 

    if (!is_null($fristName) && !is_null($lastName)) {
        echo $fristName.' '. $lastName;
    }

    // GET DETELSE
        // AND GET
        // 0 0->0
        // 0 1->1
        // 1 0->0 
        // 1 1->1 

        // OR GET
         // 0 0->0 
         // 0 1->1 
         // 1 0->1 
         // 1 1->1 

         // NOT GET
         // 0 ->1 
         // 1 ->0 

         // XOR GET
         // 0 0->1 
         // 0 1->0 
         // 1 0->0 
         // 1 1->1 

         // XNOR GET 
         // 0 0-> 0
         // 0 1-> 1
         // 1 0-> 1
         // 1 1-> 0

    $number =[];
     for($i = 0;  $i <= 100; $i++){
        if($i%2 == 0){
            array_push($number,$i);
        }
     }
     foreach($number as $number1);
        echo $number1."<br>";
?>