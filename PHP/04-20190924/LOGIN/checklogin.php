<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_20_lxt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//cách 1:
    $name = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE Email = '" . $name . "' AND Pass = '" . $pass . "'";

//cách 2:
    //$sql = "SELECT * FROM users WHERE Email = '" . $_POST['email'] . "' AND Pass = '" . $_POST['pass'] . "'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "ĐÃ ĐĂNG NHẬP THÀNH CÔNG";
} else {
    echo "ĐĂNG NHẬP BỊ THẤT BẠI";
}

mysqli_close($conn);
?>