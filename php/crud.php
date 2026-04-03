<?php
$host = "localhost";
$dbname = "test_db";
$user = "root";
$password = "";

$con = mysqli_connect($host, $user, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}