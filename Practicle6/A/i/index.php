<?php
    class MyClass{
        public function __construct(){
            echo "Constructor Is Invoked!";
            echo "<br/>";
        }
        public function myMethod(){
            echo "Method Is Invoked!";
            echo "<br/>";
        }
        public function __destruct(){
            echo "Destructor Is Invoked!";
            echo "<br/>";
        }
    }

    $obj = new MyClass();
    $obj->myMethod();