<?php
session_start();
require_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id <> $outgoing_id");
$output = "";
if (mysqli_num_rows($sql) == 1) {
    $output .= "No user are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
        require "data.php";
    }
echo $output;
