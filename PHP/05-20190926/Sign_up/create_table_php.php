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

// sql to create table
$sql = "CREATE TABLE SignUp (
        ID int PRIMARY KEY AUTO_INCREMENT,
        Name varchar(255),
        Email varchar(255),
        Pass VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>