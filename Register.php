<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO users (Username, password) VALUES ('karun@gmail.com', 'Hello')";

    if ($conn->query($sql) === TRUE) {
        echo "It works";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>