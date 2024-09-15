<?php
$conn = new mysqli('localhost', 'root', '', 'chart');
if($conn->connect_error){
    die('No connection'. $conn->connect_error);
}else{
    // echo "connected well";
}