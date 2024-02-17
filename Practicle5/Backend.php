<?php
    $a = $_POST['num'];
    for( $i = 0; $i < 11; $i++ ){
        echo "$a * $i =".$a*$i;
        echo "<br>";
    }