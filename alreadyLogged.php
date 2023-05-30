<?php session_start(); ?>

<DOCTYPE html>
<html> 
<head>
<link rel="stylesheet" href="css/alreadyLogged.css" type="text/css">
</head>
<body>
<h1>You are already logged in please select what you would like to do?</h1>
<div  id="flexcontainer">
<form action="logout.php" method="post">
    <input type="submit" name="logoutBtn" value="Logout" class="button">
</form>
<form action="addEntry.php" method = "post" >
    <input type="submit" name="addEntryBtn" value="Add Entry" class="button">
</form>
</div>


</body>
</html>