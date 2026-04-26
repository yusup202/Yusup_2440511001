<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="hero">
    <h1>Selamat Datang</h1>
    <p>Website Teknik Informatika UMMI</p>
    <a href="matkul.html" class="card">Mata Kuliah</a>
</div>
<a href="logout.php">Logout</a>
</body>
</html>