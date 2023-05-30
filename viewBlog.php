<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="css/viewBlog.css" type="text/css">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)">

</head>
<body>
    <h1>Blog Posts</h1>
    <?php
        

        if (isset($_SESSION['email'])) {   // Check if session variables exist
            
            echo '<form method="post" action="logout.php">';        //if session variables do exist then display logout button
            echo '<button type="submit" name="logout" id="logout-btn">Logout</button>';
            echo '</form>';
        }
    ?>

    
<?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "bloginfo";
        $conn = new mysqli($servername, $username, $password, $dbname);   

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if a month is selected
        if (isset($_GET['month'])) {
            $selectedMonth = $_GET['month'];
            $sql = "SELECT * FROM blogs WHERE MONTH(date) = $selectedMonth";  // Query to fetch posts for selected month
        } else {
            $sql = "SELECT * FROM blogs";     // fetches all posts
        }

        $result = $conn->query($sql);

        if ($result) {
            // Fetch all rows into an array
            $blogPosts = $result->fetch_all(MYSQLI_ASSOC);
        }

        //uses insertion sort to sort post by most recent
        for ($i = 1; $i < count($blogPosts); $i++) {
            $j = $i;
            while ($j > 0 && strtotime($blogPosts[$j]["date"] . " " . $blogPosts[$j]["blog_time"]) > strtotime($blogPosts[$j-1]["date"] . " " . $blogPosts[$j-1]["blog_time"])) {
                $temp = $blogPosts[$j];
                $blogPosts[$j] = $blogPosts[$j-1];
                $blogPosts[$j-1] = $temp;
                $j--;
            }
        }

        if (count($blogPosts) > 0) {
            // Loop through each blog post and display them if the number of rows is > 0 meaning there are blog posts
            foreach ($blogPosts as $row) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["blog_post"] . "</p>";                             
                echo "<aside>" . $row["date"] ." ". $row["blog_time"] . "</aside>";    
                echo "<hr>";     
            }
        } else {
            echo "No blog posts found.";
        }

        $conn->close();
    ?>



    <a href="index.php" class="home-button">Home</a>
    
<form method="GET">
    <select name="month" id="month" onchange="this.form.submit()">     
        <option value ="0">Select month</option>
        <option value="1" <?php if(isset($selectedMonth) && $selectedMonth == 1) echo "selected"?>>January</option>
        <option value="2" <?php if(isset($selectedMonth) && $selectedMonth == 2) echo "selected"?>>February</option>
        <option value="3" <?php if(isset($selectedMonth) && $selectedMonth == 3) echo "selected"?>>March</option>
        <option value="4" <?php if(isset($selectedMonth) && $selectedMonth == 4) echo "selected"?>>April</option>
        <option value="5" <?php if(isset($selectedMonth) && $selectedMonth == 5) echo "selected"?>>May</option>
        <option value="6" <?php if(isset($selectedMonth) && $selectedMonth == 6) echo "selected"?>>June</option>
        <option value="7" <?php if(isset($selectedMonth) && $selectedMonth == 7) echo "selected"?>>July</option>      
        <option value="8" <?php if(isset($selectedMonth) && $selectedMonth == 8) echo "selected"?>>August</option>
        <option value="9" <?php if(isset($selectedMonth) && $selectedMonth == 9) echo "selected"?>>September</option>
        <option value="10" <?php if(isset($selectedMonth) && $selectedMonth == 10) echo "selected"?>>October</option>
        <option value="11" <?php if(isset($selectedMonth) && $selectedMonth == 11) echo "selected"?>>November</option>
        <option value="12" <?php if(isset($selectedMonth) && $selectedMonth == 12) echo "selected"?>>December</option>
    </select>
    <?php if(isset($_GET['month'])): ?>
        <button type="button" onclick="window.location.href='viewBlog.php'">Clear Filter</button>   
    <?php endif;?>
</form>
<?php 
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    echo '<a href="addentry.php" class="add-post-button">Add Post</a>';
} else {
    echo '<a href="login.php" class="add-post-button">Login to Add Post</a>';
}
?>
    </body>
</html>
