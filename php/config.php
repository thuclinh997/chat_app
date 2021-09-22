<?php
$conn = mysqli_connect("localhost","root","","chat");
if(!$conn){
    echo "database connect error: " . mysqli_connect_error();
}
