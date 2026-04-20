<?php
$servername = "localhost";
$username = "root";
$password = "benoit";
$dbname = "database_hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
