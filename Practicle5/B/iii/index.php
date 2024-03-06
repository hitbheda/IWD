<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find sin, cos and tan of the given angle.</title>
</head>
<body>
    <form method="post">
    <label for="num1">Enter Number:</label>
        <input type="number" name="num1" id="num1"value=0>
        <br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['num1'])){
            $num = $_POST['num1'];
            echo "<br>";
            echo "Sin = ".sin($num);
            echo "<br>";
            echo "Cos = ".cos($num);
            echo "<br>";
            echo "Tan = ".tan($num);
        }
    ?>
</body>
</html>