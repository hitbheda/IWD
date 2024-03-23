<?php
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            echo "Name =".$_GET['name'].'<br/>';
            echo "Email =".$_GET['email'].'<br/>';
            echo "Enrollment =".$_GET['enrollment'].'<br/>';
        }