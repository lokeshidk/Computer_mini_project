<?php
$host='localhost';
$username="root";
$password="";
$database="hi_trading";
$conn = mysqli_connect('localhost', 'root', '', 'hi_trading');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username,  password) VALUES ('$username', '$password')";
mysqli_query($conn, $sql);
header('Location: login_page.html');
exit();