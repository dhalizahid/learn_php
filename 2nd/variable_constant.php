<?php
    // start
        // variable constant deccleare
        $value=40;
        // echo"$value";
        // variable replase 
        $value=50;
        // echo"$value";
        // used constant function
        define("VALUE",60);
        // echo VALUE;
    // end 
    // start 
        // operator precedency
        $a = 10;
        $b = 5;
        $a +=$b;
        // echo $a;
    // end 
    // start 
        $e=20;
        $e = $e **2;
        // echo $e;
        // type convert 
        settype($e,'string');
        var_dump($e);
    // end 
    // start 
        // dacimal number Convert as you like

        // $number = 40.526646166;
            // echo round($number,3);

        // used ciling function 
            // $number1 = 40.526646166;
            // echo ceil($number1);

            // used floor function 
                // $number1 = 40.526646166;
                // echo floor($number1);
            // decemal. next number lemitation compayle
            $number2 = 50.51;
            $numberChar=explode('.',$number2);

            $numberChar = $numberChar[1];
            // echo $numberChar;
            // var_dump($numberChar);
            if($numberChar >= 50){
                $number2 = ceil($number2); 
            }
            else
                $number2 = floor($number2);

                echo"$number2";

?>
        
