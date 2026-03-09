<?php
session_start();

// Veritabanı bağlantısı
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "portfolio_blog";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Blog postlarını çek
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>My Blog</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
    </nav>
</header>

<section class="blog-container">
    <h2>Recent Blog Posts</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='blog-post'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p class='date'>" . $row['date'] . " " . $row['time'] . "</p>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No blog posts found.</p>";
    }
    $conn->close();
    ?>
</section>

<footer>
    <p>© 2025 My Portfolio</p>
</footer>
</body>
</html>
