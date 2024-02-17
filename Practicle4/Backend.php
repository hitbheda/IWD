<?php
    $i = $_POST['num'];
    $a = 1;
    $b = 0;
    // $c = 0;
    echo 0; 
    echo "<br>" ;
    $temp = 0;
    while($temp < $i-1) {
        $c = $a + $b;
        echo $c;
        echo "<br>";
        $a = $b;
        $b = $c;
        $temp += 1;
    }