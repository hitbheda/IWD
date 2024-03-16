<?php

    class myClass {
        private $privateAttribute;
        function __set($name, $value) {
            echo "setting " . $name . " TO " . $value;
            $this->$name = $value;
        }
        function __get($name) {
            echo "This is " . $name . " To " . $this->$name;
        }
    }
    $myClass = new myClass();
    $myClass->privateAttribute = "hello";
