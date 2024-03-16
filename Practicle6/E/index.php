<?php

interface NewInterface
{
    public function doSomething();
}
class Main implements NewInterface
{
    public function doSomething()   
    {
        echo "Hellow";
    }
}
$new = new Main();
$new->doSomething();