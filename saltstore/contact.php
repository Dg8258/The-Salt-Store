<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data and insert into database
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO tblcontact (name, email, msg)
VALUES ('$name', '$email', '$msg')";

if (mysqli_query($conn, $sql)) {
    echo "Message send successfuly!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
