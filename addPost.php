<!-- deals with adding the time, date , title and inforamtion about the blog -->
<?php  
session_start();
$email = $_SESSION["email"];
$password = $_SESSION["password"];
date_default_timezone_set('Europe/London');

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bloginfo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $title = $_POST["title"];
  $blog_post = $_POST["bloginfo"];
  $date = date("Y-m-d"); // Get current date
  $time = date("H:i:s"); // Get current time

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO blogs (date, blog_time, title, blog_post) VALUES ('$date', '$time', '$title', '$blog_post')";

    if ($conn->query($sql) === TRUE) {
        header("Location: viewBlog.php");
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}









?>

