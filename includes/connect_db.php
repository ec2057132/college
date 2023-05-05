<?php
//Database connection file

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "netbook";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$conn) die("Database connection failed: " . mysqli_error());
?>