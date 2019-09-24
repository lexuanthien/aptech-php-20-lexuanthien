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

$sql = "INSERT INTO users (Email, Pass)
VALUES ('xuanthien@gmail.com', 'xuanthien'), ('lexuanthien123@gmail.com','lexuanthien123'), ('xuanthien14031998qt@gmail.com','12345')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>