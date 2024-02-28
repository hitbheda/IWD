<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Given String</title>
</head>
<body>
    <form method="post">
        <input type="text" name="string" id="string" placeholder="Enter String">
        <input type="submit" value="Reverse">
    </form>
    <?php
        if(isset($_POST['string'])){
            $string = $_POST['string'];
            echo "Reverse String is : ".strrev($string);
        }
    ?>
</body>
</html>

