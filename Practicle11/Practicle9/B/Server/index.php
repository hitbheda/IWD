<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'userauth';

        $conn = mysqli_connect($server,$user,$pass,$dbname);

        if(!$conn){
            echo("Connection Faild".mysqli_connect_error());
        }else{
            $username = $_POST['username'];
            $passwd = $_POST['passwd'];

            $query = "SELECT username,passwd FROM login WHERE username = '$username' AND passwd = '$passwd' ";

            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result)){
                echo "Login Sucessfull";
            }else{
                echo "Invalid Username Or Password";
            }
        }
    }else{
        echo "Your Fuckd";
    }