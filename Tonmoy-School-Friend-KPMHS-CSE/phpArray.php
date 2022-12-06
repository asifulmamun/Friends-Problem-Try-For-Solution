<?php

    // Individual
    // $Name = array("A", "B", "C", "D");
    // $Subbject_1 = array(70, 80,  90, 100);
    // $Subbject_2  = array(75, 85,  85, 75);

    $Result =  array(

        'A' => array(
            'Subject_1'=>70,
            'Subject_2'=>75,
        ),

        'B' => array(
            'Subject_1'=>80,
            'Subject_2'=>85,
        ),

        'C' => array(
            'Subject_1'=>90,
            'Subject_2'=>85,
        ),

        'D' => array(
            'Subject_1'=>100,
            'Subject_2'=>85,
        ),
    );


    // Printed by loop
    foreach($Result as $x => $x_value) {
        echo "Name=  " . $x . ", Subject 1 =" . $x_value['Subject_1'] . ", Subject 2  =     " . $x_value['Subject_2'];
        echo "<br>";
    }

    // printed by array
    echo '<pre>';
    print_r($Result);
    echo '</pre>';