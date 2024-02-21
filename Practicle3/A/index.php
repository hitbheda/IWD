<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="CarName" id="CarName" placeholder="Enter Car Model:">
        <button type="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST['CarName'])){
            $CarName = $_POST['CarName'];
            $Cars = array(
                "Tata" => array("Safari","Nexon"),
                "Mahindra" => array("Bolero","XUV300")
            );
            $flag = 0;
            foreach($Cars as $Car => $CarN){
                if($CarN == $CarName){
                    echo "Nice";
                }
            }
        }
    ?>
</body>
</html>