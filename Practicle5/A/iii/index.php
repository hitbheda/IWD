<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Space</title>
</head>
<body>
    <form method="post">
        <input type="text" name="string" id="string" placeholder="Enter String">
        <input type="submit" value="Remove Space">
    </form>
    <?php
        if(isset($_POST['string'])){
            $string = $_POST['string'];
            echo "After Remove Space : ".str_replace(' ','',$string);
        }
    ?>
</body>
</html>