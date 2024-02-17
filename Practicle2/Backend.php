<?php
    function Calc(){
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op = $_POST['op'];
        if ($op == '+') {
            echo "$a + $b = ".$a+$b;
        } else if ($op == '-') {
            echo "$a - $b =".$a-$b;
        }else if ($op == '*') {
            echo "$a * $b =".$a*$b;
        }else if ($op == '/') {
            echo "$a / $b =".$a/$b;
        }else {
            echo "Invalid Input!";
        }
        // header("Location:/2241-CE/Practicle2/");
    }
    Calc();