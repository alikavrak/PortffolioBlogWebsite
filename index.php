<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>

    <header>
        <h1>Welcome to My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="addPost.php">Add Post</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <section class="about">
        <h2>About Me</h2>
        <p>Hello! I'm a Computer Science undergraduate student studying at Queen Mary University of London.</p>
        <p>My goal is to become an expert in Computer Software. To achieve this, I plan to complete my bachelor's degree in Computer Science, followed by a master's degree. This will equip me with the necessary knowledge to contribute meaningfully to the field.</p>
    </section>

    <footer>
        <p>© 2025 My Portfolio</p>
    </footer>

</body>
</html>
