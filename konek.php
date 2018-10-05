<?php
$servername = "localhost";
$user = "root";
$password = "000";
$db = "pwd";

$conn = mysqli_connect($servername,$user,$password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}