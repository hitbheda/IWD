<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];

    $name_pattern = "/^[a-zA-Z ]+$/";
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $role_pattern = "/^[a-zA-Z ]+$/";
    $dob_pattern = "/^\d{4}-\d{2}-\d{2}$/"; // YYYY-MM-DD
    $gender_pattern = "/^(male|female)$/";
    $phone_pattern = "/^[0-9]{10}$/";

    if (!preg_match($name_pattern, $name)) {
        echo "Invalid name format.<br/>";
    }else{
        echo $name.'<br/>';
    }
    if (!preg_match($email_pattern, $email)) {
        echo "Invalid email format.<br/>";
    }else{
        echo $email.'<br/>';
    }
    if (!preg_match($role_pattern, $role)) {
        echo "Invalid role format.<br/>";
    }else{
        echo $role.'<br/>';
    }
    if (!preg_match($dob_pattern, $dob)) {
        echo "Invalid date of birth format. Use YYYY-MM-DD.<br/>";
    }else{
        echo $dob.'<br/>';
    }
    if (!preg_match($gender_pattern, $gender)) {
        echo "Invalid gender format. Use 'male' or 'female'.<br/>";
    }else{
        echo $gender.'<br/>';
    }
    if (!preg_match($phone_pattern, $phone)) {
        echo "Invalid phone number format. Use 10 digits.<br/>";
    }else{
        echo $phone.'<br/>';
    }
    }