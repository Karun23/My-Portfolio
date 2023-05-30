<html>
<head>
<link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<?php
session_start();



$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  $row = $result->fetch_assoc();
  if ($row["password"] == $password) {
    echo "Login successful!";
    
    
    $_SESSION["email"] = $username;
    $_SESSION["password"] = $password;
    header("Location: addEntry.php");
  } else {
    echo '<p class="incorrect">incorrect password</p>';
  }
} else {
  echo '<p class="incorrect">User doesnt exist! </p>';
  die();
  
}


$conn->close();
?>
</html>