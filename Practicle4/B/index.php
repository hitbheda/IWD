<html>
  <head>
    <title>PHP Shorting</title>
  </head>
  <body>
    <?php 
      $ar = array(4,2,6,1,8,3,5,7);
      $temp = array();
      for($i = 0; $i < count($ar); $i++){
        for($j = $i + 1; $j < count($ar); $j++){
          if($ar[$i] > $ar[$j]){
            $temp = $ar[$i];
            $ar[$i] = $ar[$j];
            $ar[$j] = $temp;
          }
        }
      }
    print_r($ar);
    ?> 
  </body>
</html>