<?php
$servername = "localhost";
$username = "root"; //root, nhập tên khác sẽ bị lỗi
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>