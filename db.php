<?php
$host = "sql205.infinityfree.com";
$user = "if0_42407142";
$password = "7mNeFeXMJh";
$database = "if0_42407142_event_registration";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>