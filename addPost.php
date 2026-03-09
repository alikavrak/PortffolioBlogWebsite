<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add a New Blog Post</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

            </ul>
        </nav>
        <script src="script.js"></script>
    </header>

    <section class="post-form-container">
        <h2>New Post</h2>
        <form id="postForm" action="submitPost.php" method="post">
            <label for="postTitle">Title:</label>
            <input type="text" id="postTitle" name="postTitle" required>

            <label for="postContent">Content:</label>
            <textarea id="postContent" name="postContent" rows="5" required></textarea>
            <p>Character count: <span id="charCount">0</span></p>
            <button type="submit">Add Post</button>
            <button type="button" class="clear-btn" onclick="clearForm()">Clear</button>
        </form>
    </section>

    <footer>
        <p>© 2025 My Portfolio</p>
    </footer>

    <script>
        function clearForm() {
            document.getElementById("postForm").reset();
        }
    </script>
</body>
</html>
