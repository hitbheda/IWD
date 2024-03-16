<?php

abstract class NewClass
{
    abstract public function Hii();
}

class Main extends NewClass
{
    public function Hii()
    {
        echo "Abstract Class Is Impelmented";
    }
}

$obj = new Main();
$obj->Hii();