<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="main">
    <form method='get'>
      <input type="text" name="text" placeholder="Enter text:"/>
      <button type='submit'>Submit</button>
    </form>
  </div>
  <?php
    // $text = "hi bro";
    if(isset($_GET['text'])){
      $text = $_GET['text'];
      $charCount = strlen($text);
      $wordCount = 0;
      for($i = 0; $i < $charCount; $i++){
        if($text[$i] == " "){
          $wordCount++;
          $charCount--;
        }
      }
      $wordCount++;
      echo "String :" . $text . "<br>";
      echo "Word count: " . $wordCount;
      echo "<br>";
      echo "Character count: " . $charCount;
  }
  ?>
</body>
</html>