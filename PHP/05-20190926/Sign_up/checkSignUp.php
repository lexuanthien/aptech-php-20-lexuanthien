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

if(isset($_POST['ten']) && isset($_POST['email']) && isset($_POST['pass'])) {
    $sql = "INSERT INTO signup (Name, Email, Pass)
            VALUES ('" . $_POST['ten'] . "', '" . $_POST['email'] . "', '" . $_POST['pass'] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
