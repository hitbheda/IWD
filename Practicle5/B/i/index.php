<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Rendome Number Between Range</title>
</head>
<body>
    <div class="main">
    <form method="get">
        <label for="num1">Enter 1st Number:</label>
        <input type="number" name="num1" id="num1"value=0>
        <br>
        <label for="num2">Enter 2nd Number:</label>
        <input type="number" name="num2" id="num2" value=0>
        <br>
        <input type="submit">
        <?php
            if(isset($_GET['num1']) && isset($_GET['num2'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $res = mt_rand($num1,$num2);
                echo"<br>";
                echo $res;
            }else{
                echo "Invalid input!";
            }
        ?>
    </form>
    </div>
</body>
</html>


