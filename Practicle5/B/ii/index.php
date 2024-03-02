<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Desimal</title>
</head>
<body>
<form method="post">
        <input type="number" name="num1" id="num1" placeholder="Enter Number:">
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
            echo"<br/>";
            $res = decbin($num1);
            echo "Binary :";
            echo $res;
            echo"<br/>";
            $res = hexdec($num1);
            echo "Hexadesimal :";
            echo $res;
            echo"<br/>";
            $res = octdec($num1);
            echo "Octel :";
            echo $res;
        }else{
            echo "Invalid input!";
        }
    ?>
</body>
</html>