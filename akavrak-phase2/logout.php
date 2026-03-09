<?php
session_start();          // Oturumu başlat
session_unset();          // Tüm session değişkenlerini temizle
session_destroy();        // Oturumu sonlandır

// Login sayfasına yönlendir
header("Location: login.php");
exit();
?>
