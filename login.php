<?php 
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    echo "you are not logged in";
} 
else {
    header("Location: alreadyLogged.php");
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/blog.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)">


</head>
<body>
<form action="login_Authorise.php" method="POST">
    <h2 >Login Page</h2>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
    <button type="submit">Login</button>
</form>
<a href="index.php" class="home-button">Home</a>
</body>
</html>
