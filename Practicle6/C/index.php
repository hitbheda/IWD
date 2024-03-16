<?php

echo "<h1>Single Inheritance</h1>";
echo "<br/>";

class Main
{
    public function method()
    {
        echo "Parant Method Is Invoked";
        echo "<br/>";
    }
}

class Child extends Main
{
    public function method1()
    {
        echo "Child Method Is Invoked";
        echo "<br/>";
    }
}

$obj = new Child();
$obj->method();
$obj->method1();

echo "<h1>Multilevel Inheritance</h1>";
echo "<br/>";

class GrandParant
{
    public function method3()
    {
        echo "Grand Parant Method Is Invoked";
        echo "<br/>";
    }
}

class Parant extends GrandParant
{
    public function method4()
    {
        echo "Parant Method Is Invoked";
        echo "<br/>";
    }
}

class Children extends Parant
{
    public function method5()
    {
        echo "Childrern Method Is Invoked";
        echo "<br/>";
    }
}

$obj1 = new Children();
$obj1->method3();
$obj1->method4();
$obj1->method5();


echo "<h1>Multipal Inheritance</h1>";
echo "<br/>";
trait Parant1
{
    public function method6()
    {
        echo "Parant1 Method Is Invoked";
        echo "<br/>";
    }
}

trait Parant2
{
    public function method7()
    {
        echo "Parant2 Method Is Invoked";
        echo "<br/>";
    }
}

class AnotherChild
{
    use Parant1;
    use Parant2;
    public function method8()
    {
        echo "Child Method Is Invoked";
        echo "<br/>";
    }
}

$obj1 = new AnotherChild();
$obj1->method6();
$obj1->method7();
$obj1->method8();