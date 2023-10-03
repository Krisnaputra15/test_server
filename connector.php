<?php
$databaseHost = '54.147.121.74';
$port = 3306;
$databaseName = 'tes_server';
$databaseUsername = 'krisnaputra';
$databasePassword = 'fullclip';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $port);
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>