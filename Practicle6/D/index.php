<?php
class Main
{
    public function __call($method, $args)
    {
        if ($method === 'myMethod' && count($args) === 1) {
            echo 'First Function Invoked!';
            echo '<br/>';
        } elseif ($method === 'myMethod' && count($args) === 2) {
            echo 'Second Function Invoked!';
            echo '<br/>';
        } else {
            echo "Method Does Not Exists!";
            echo '<br/>';
        }
    }
}

class Parant
{
    public function Method()
    {
        echo "This Is Parant Method";
        echo '<br/>';
    }
}
class Child extends Parant
{
    public function Method()
    {
        echo "This Is Overridden Method";
        echo '<br/>';
    }
}
$obj = new Main();
$obj->myMethod(1);
$obj->myMethod(1, 2);

$obj2 = new Child();
$obj2->Method();
