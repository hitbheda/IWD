<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class myClass{
            function myFunction(){
                echo "This Is An Function!";
            }
            public $var = 'This Is An Variable!';
        }
        $Obj = new myClass;
        $Obj->myFunction();
        echo "<br/>";
        echo $Obj->var;
        
    ?>
</body>
</html>