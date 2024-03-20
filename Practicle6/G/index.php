<?php

    class MainClass{
        public $Val;
    }
    $Obj = new MainClass();
    $newVal = 5;
    $Obj->Val = $newVal;
    echo $Obj->Val;
    echo "<br/>";
    $copy = clone $Obj;
    print_r($copy);
    echo "<br/>";
    $copy->Val = 7;
    echo $copy->Val;
    echo "<br/>";