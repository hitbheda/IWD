<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>replace the given word from the given string.</title>
</head>
<body>
    <form method="post">
        <input type="text" name="string" id="string" placeholder="Enter String">
        <input type="text" name="word" id="word" placeholder="Enter Word">
        <input type="text" name="replace" id="replace" placeholder="Enter Replace Word">
        <input type="submit" value="Replace">
    </form>
    <?php
        if(isset($_POST['string'])){
            $string = $_POST['string'];
            $word = $_POST['word'];
            $replace = $_POST['replace'];
            echo "After Replace : ".str_replace($word,$replace,$string);
        }
    ?>
</body>
</html>

