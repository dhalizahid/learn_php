<?php
    $reverse_name1=[];
    $reverse_name2=[];

    $new_array=[];
    for($i= $size/2-1; $i>=0; $i-- ){
        array_push($reverse_name1,$names1[$i]);
    }
    for ($i=$size-1; $i >=$size/2 ; $i--) { 
        array_push($reverse_name2, $names1[$i]);
    }
    array_push($new_array, $reverse_name1);
    array_push($new_array,$reverse_name2);
    print_r($new_array);

    tow array concrat to one output used array_merge
    $new_array = array_merge($reverse_name1,$reverse_name2);
    print_r($new_array);
    ***** stotage to out data ba storage take data ber kora nea asa 
    print_r(array_chunk($new_array, 4));


?>