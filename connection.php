<?php

$host = 'localhost:3306';
$user = 'root';
$pwd = '';
$database = 'todolist';

$conn = new mysqli($host,$user,"",$database);

if ($conn->connect_error) {
    echo "Database failed to connect : Error " . $conn->connect_error;
    exit();
}
?>