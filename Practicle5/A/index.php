<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check That String Is Lower Or Not</title>
</head>
<body>
    <form method="post">
        <input type="text" name="string" id="string" placeholder="Enter String">
        <input type="submit" value="Check">
    </form>
    <?php
        if(isset($_POST['string'])){
            $string = $_POST['string'];
            if(ctype_lower($string)){
                echo "String is Lower";
            }else{
                echo "String is Not Lower";
            }
        }
    ?>
</body>
</html>