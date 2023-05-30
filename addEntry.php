<?php session_start(); 

$email = $_SESSION["email"];
$password = $_SESSION["password"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Form </title>
	<link rel="stylesheet" href="css/blog.css">
	<link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)">
	<script src="javaScript/clearBlog.js"defer></script>
	<script src="javaScript/blankFields.js"defer></script>
</head>
<body>
	<form method="POST" action="addPost.php"  >
        <h2>Add Blog </h2>
		<div class="form-group">
			<input type="text" id="title" name="title" placeholder=" Enter Title" >
		</div>
		<div class="form-group">
			<label for="text">Enter your text here</label>
			<textarea type="text" id="bloginfo" name="bloginfo" placeholder=" Enter your text here " ></textarea>
		</div>
		<div class="clearfix">
			<div id="clearBtn">
				<div id="">
					<button type="submit" id="submitBtn">Post</button>
					<button type="reset" id="confirm-clear">Clear</button>
				</div>
			</div>
		</div>
	</form>
	
    <a href="index.php" class="home-button">Home</a>
</body>
</html>
