<?php
    // $num = 100;
    function isPrime($num){
        for ($i = 2; $i < sqrt($num); $i++) {
            if($num % $i == 0){
                return 0;
            }
        }
        return 1;
    }

    for ($i = 2; $i < 100; $i++) {
        if(isPrime($i) == 1){
            echo $i . " Is Prime number <br/>";
        }
    }
    // $res = isPrime(23);
    // echo $res."hi";