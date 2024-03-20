<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "Name =".$_POST['name'].'<br/>';
            echo "Email =".$_POST['email'].'<br/>';
            echo "Date Of Birth =".$_POST['dob'].'<br/>';
            echo "Gender =".$_POST['gender'].'<br/>';
            echo "Phone =".$_POST['phone'].'<br/>';
        }
    