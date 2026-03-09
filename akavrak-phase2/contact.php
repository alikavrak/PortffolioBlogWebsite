<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Me</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <header>
        <h1>Contact Me</h1>
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

    <section class="contact-container">
        <h2>Get in Touch</h2>
        <p>If you have any questions or collaboration ideas, feel free to reach out to me!</p>

        <div class="contact-card">
            <h3>My Contact Information</h3>
            <p><strong>Email:</strong> <a href="mailto:aliikavrak@yahoo.com">aliikavrak@yahoo.com</a></p>
            <p><strong>Phone:</strong> <a href="tel:+905449042211">+90 544 904 22 11</a></p>
            <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/yourprofile" target="_blank">linkedin.com/in/yourprofile</a></p>
            <p><strong>GitHub:</strong> <a href="https://github.com/yourgithub" target="_blank">github.com/yourgithub</a></p>
        </div>
    </section>

    <footer>
        <p>© 2025 My Portfolio</p>
    </footer>

</body>
</html>
