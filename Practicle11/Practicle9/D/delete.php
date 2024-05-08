<?php 
    include './dbconn.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM userinfo WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "Error".$result;
        }else{
            echo "Deleted Sucessfully";
            header("Location: index.php");
        }
    }else{
        echo "Wrong";
    }