<?php
$databaseHost = 'localhost';
$databaseName = 'tes_server';
$databaseUsername = 'krisnaputra';
$databasePassword = 'fullclip';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>