<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_blog";

// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrol
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Formdan gelen veriler
$title = $_POST['postTitle'];
$content = $_POST['postContent'];
$date = date("Y-m-d");
$time = date("H:i:s");

// Veritabanına ekle
$sql = "INSERT INTO posts (title, content, date, time) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $title, $content, $date, $time);

if ($stmt->execute()) {
    header("Location: blog.php");
    exit();
} else {
    echo "❌ Veri eklenemedi: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
