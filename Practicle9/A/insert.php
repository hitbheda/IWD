<?php 
    include './dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['passwd'];
        $passwd = $_POST['username'];
        $position = $_POST['position'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];
        $email = $_POST['email'];

        $query = "INSERT INTO userinfo(username,passwd,position,department,salary,email) VALUES('$username','$passwd','$position','$department','$salary','$email');";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "Error".$result;
        }else{
            echo "Inserted Sucessfully";
            header("Location: index.php");
        }
    }else{
        echo "Wrong";
    }