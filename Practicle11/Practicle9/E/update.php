<?php 
    include './dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $oldPasswd = $_POST['oldPasswd'];
        $newPasswd = $_POST['newPasswd'];
        $verifyPasswd = $_POST['verifyPasswd'];
        

        $query = "SELECT passwd FROM userinfo WHERE passwd = $oldPasswd";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "Error".$result;
        }else{
           if(mysqli_fetch_assoc($result)['passwd'] == $oldPasswd){
            if($newPasswd == $verifyPasswd){
                $query = "UPDATE userinfo SET passwd = '$newPasswd';";
                $result = mysqli_query($conn,$query);
                if(!$result){
                    echo "Erro While Updating Password";
                }else{
                    echo "Password Updasted Sucessfully";
                }
            }
           }else{
            echo "Wrong Old Password";
           }
        }
    }else{
        echo "Wrong";
    }