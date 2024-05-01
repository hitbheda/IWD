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

            $query = "SELECT * FROM userinfo WHERE username = '$username' AND passwd = '$passwd' ";

            $result = mysqli_query($conn,$query);

            if(!$result){
                echo "Error While Fetching Data".mysqli_error($conn);
            }else{
                if($row = mysqli_fetch_assoc($result)){
                    echo "<center>";
                    echo "<h1>This Is Employee Detail</h1>";
                    echo "<br/>";
                    echo "Employee Id :" . $row['id'];
                    echo "<br/>";
                    echo "Employee Username :" . $row['username'];
                    echo "<br/>";
                    echo "Employee Position :" . $row['position'];
                    echo "<br/>";
                    echo "Employee Dapartment :" . $row['department'];
                    echo "<br/>";
                    echo "Employee Salary :" . $row['salary'];
                    echo "<br/>";
                    echo"Employee Email :" .  $row['email'];
                    echo "</scenter>";
                }
            }
        }
    }else{
        echo "Your Fucked";
    }