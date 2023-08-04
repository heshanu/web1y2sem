<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'test1';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Connect error (' . $conn->connect_errno . ')' . $conn->connect_error);
}
