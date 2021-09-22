<?php
session_start();
require_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!empty($email) && !empty($password)) {
    //let's check users entered email & password matched to database nay row email and password
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id']; //using this session user unique_id in other php file
        mysqli_query($conn,"UPDATE users SET status = 'Active now' WHERE unique_id = {$row['unique_id']} LIMIT 1");
        echo "success";
    } else {
        echo "Email of password is incorrect";
    }
} else {
    echo "all input field are required";
}
