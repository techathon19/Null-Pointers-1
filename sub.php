<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hottea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO selected (userid,item, quantity,totalprice)
VALUES ('John', 'blacktea', 2,25)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>