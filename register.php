<?php
include_once('connector.php');


    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $result = mysqli_query($mysqli, "INSERT INTO users(email,password,fullname) VALUES('$email','$password','$fullname')");

    header('index.php');
?>