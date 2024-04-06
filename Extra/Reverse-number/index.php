<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="str" placeholder="Enter A String :">
        <button>Submit</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $str = $_POST['str'];
            echo "Reversed String =" . strrev($str);
        }
    ?>
</body>
</html>