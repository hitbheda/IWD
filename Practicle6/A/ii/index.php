<?php
class myClass
{
    function myFunction()
    {
        echo "This Is An Function!";
    }
    public $var = 'This Is An Variable!';
}
$Obj = new myClass;
$Obj->myFunction();
echo "<br/>";
echo $Obj->var;
