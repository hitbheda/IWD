<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This Is A 3*3 Matrix</title>
</head>
<body>
    <?php
        $m1 = array(
            array(2,4,1),
            array(3,5,7),
            array(6,8,9)
        );
        $m2 = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
        );
        $result = array();
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                $result[$i][$j] = $m1[$i][$j] * $m2[$i][$j];
            }
        }
        echo "<h1>Matrix 1</h1>";
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo $m1[$i][$j]." ";
            }
            echo "<br>";
        }
        echo "<h1>Matrix 2</h1>";
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo $m2[$i][$j]." ";
            }
            echo "<br>";
        }
        echo "<h1>Resultant Matrix</h1>";
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 3; $j++) { 
                echo $result[$i][$j]." ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>