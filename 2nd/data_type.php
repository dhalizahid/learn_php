<?php
    // see teype and use varchar
        // floot
        // $floot=8000.25252;
        // var_dump($floot);
    //     // number
    //     $Number=15646;
    //     var_dump($Number);
    //     // string
    //     $string="Zahid";
    //     var_dump($string);
    // // data type testting
        // $Data = 50;
        // $Type = gettype($Data);
        // if ($Type == 'integer'){
        //     echo "This is integer valu";
        // }
        // else
        //     echo"This is not integer valu";
    // use small testing used ternery operator
                // = Asingment oparetor 
                // == Comparigon oparator 
                // === identety oparatorr -> used case Tow array comparigon 
                    // used asoseative array
                $x = array("a" => "zahid",
                           "b" => "shorif");
                $y= array("a"  => "zahid",
                          "b"  => "shorif");
                var_dump($x === $y);
                echo "<br>";
                $name = array( 'zahid','ferdaws','shorif','naim');
                print_r($name);
                echo "<br>";
                echo $name[2];
                echo "<br>";
                // multi array used
                 $name1 = array( 'parson1' => [
                                    'first_name' => 'zahid',
                                    'last_name'  => 'hossain',
                                    'phone'      => '019',
                                    'address'    => [
                                        'thana'  => 'koyra',
                                        'zilla'  => 'khulna'
                                    ],
                                ], 
                                'parson2' => [
                                    'first_name' => 'nain',
                                    'last_name'  => 'hossain',
                                    'phone'      => '019',
                                    'address'    => [
                                        'thana'  => 'koyra',
                                        'zilla'  => 'khulna'
                                    ],
                                ],
                                'parson3' => [
                                    'first_name' => 'ferdaws',
                                    'last_name'  => 'hossain',
                                    'phone'      => '019',
                                    'address'    => [
                                        'thana'  => 'rakalgasi',
                                        'zilla'  => 'bagerhat'
                                    ],
                                ], 
                                'parson4' => [
                                    'first_name' => 'shorif',
                                    'last_name'  => 'hasan',
                                    'phone'      => '019',
                                    'address'    => [
                                        'thana'  => 'koyra',
                                        'zilla'  => 'khulna'
                                    ],
                                ],);
                    // print_r($name1);
                    // var_dump($name1);
                    echo "<br>";
                    // key and data delete 
                    //unset($name1['parson3']['last_name']);
                    // array data change and rename 
                    $name1['parson4']['phone']='01908209777';
                    if(isset($name1['parson3']['last_name'])){
                        print_r($name1['parson3']['last_name']);
                    }
                    

                    
                    


        // $Type == 'integer'? $value='integer value':$value='not integer value';
        // echo"$value";
   
        ?>