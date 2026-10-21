<?php

session_start();

$host = "mysqldb";
$user = "root";
$password = "admin123";
$dbname = "customers";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
