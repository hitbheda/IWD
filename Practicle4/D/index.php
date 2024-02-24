<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morse Code</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="text" id="text" placeholder="Enter Text">
        <input type="submit" value="Convert">
    </form>
    <?php
        if(isset($_POST['text'])){
            $text = $_POST['text'];
            $morse = array(
                "A" => ".-",
                "B" => "-...",
                "C" => "-.-.",
                "D" => "-..",
                "E" => ".",
                "F" => "..-.",
                "G" => "--.",
                "H" => "....",
                "I" => "..",
                "J" => ".---",
                "K" => "-.-",
                "L" => ".-..",
                "M" => "--",
                "N" => "-.",
                "O" => "---",
                "P" => ".--.",
                "Q" => "--.-",
                "R" => ".-.",
                "S" => "...",
                "T" => "-",
                "U" => "..-",
                "V" => "...-",
                "W" => ".--",
                "X" => "-..-",
                "Y" => "-.--",
                "Z" => "--..",
                "1" => ".----",
                "2" => "..---",
                "3" => "...--",
                "4" => "....-",
                "5" => ".....",
                "6" => "-....",
                "7" => "--...",
                "8" => "---..",
                "9" => "----.",
                "0" => "-----",
            );
            $text = strtoupper($text);
            $text = str_split($text);
            $morse_code = "";
            foreach ($text as $char) {
                if($char == " "){
                    $morse_code .= " ";
                }else{
                    $morse_code .= $morse[$char]." ";
                }
            }
            echo "<h1>Morse Code</h1>";
            echo $morse_code;
        }
    ?>
</body>
</html>
                
