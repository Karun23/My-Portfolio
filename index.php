<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <head>
        
        
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600&display=swap" rel="stylesheet">
    </head>
    <div id="background">
        <header>
            <h1>Karun Ravikumar</h1>
            <nav class="nav-container">
                <ul>
                    <li><a href="#Aboutme">About me</a></li>
                    <li><a href="Exp&projects.php">Experience</a></li>
                    <li><a href="Education&skills.php">Education</a></li>
                    <li><a href="Exp&projects.php">Projects</a></li>
                    <li><a href="Education&skills.php">Skills</a></li>
                    <li><a href="viewBlog.php">Blog</a></li>
                    <?php
        if ( isset($_SESSION['email']) && isset($_SESSION['password'])) {   
            
            echo '<form method="post" action="logout.php">';
            echo '<button type="submit" name="logout" id="logout-btn">Logout</button>';
            echo '</form>';
        }
    ?>
                </ul>
            </nav>
        </header>
        <div class="main-text">
            <h1>Welcome to My Portfolio.</h1>
            <button class="login-button"><a href="login.php">Login</a></button>
        </div>
    </div>
    <div id="Aboutme">
        <div class="container">
            <div class="row">
                <div class="column-1">
                    <figure>
                        <img src="imgs/picture.png">
                    </figure>
                    <figcaption>This is a picture of me.</figcaption>
                </div>
                <div class="column-2">
                    <h2>About me</h2>
                    <article>
                        <section>
                            <p>My name is Karun Ravikumar, and I am currently studying Computer Science at Queen Mary University of London.</p>
                            <p>In my free time, I enjoy playing football and going to the gym to stay active and healthy.</p>
                            <p>I am planning to complete my Computer Sciecne degree ahnd hopefully get into a future career involving technology</p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <footer>Copyrights @ 2023 Karun Ravikumar</footer>
</body>
</html>