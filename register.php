<?php
include('connector.php');

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $result = mysqli_query($mysqli, "INSERT INTO users(email,password,fullname) VALUES('$email','$password','$fullname')");

    header('Location: index.php');
} else {
    header('Location: index.php');
}
?>