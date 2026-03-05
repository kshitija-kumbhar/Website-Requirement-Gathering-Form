<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websiteform";

// Create connection and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email,password) VALUES ('$email', '$password')";

// Execute query
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['user'] = $email;
    echo "success";
} else {
    echo "error";
}

mysqli_close($conn);

?>