<?php
$cookie_name = "Name";
$cookie_val = "hii";
    setcookie($cookie_name,$cookie_val, time()+300,"/");

    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie name =".$_COOKIE[$cookie_name];
    }
?>