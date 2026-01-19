<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "aiub_student_management";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    
?>