<?php 
session_start();
require_once('dbkoneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $hashedPassword = md5($password);

    try {
        $sql = "INSERT INTO user (nama, email, password) VALUES (?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $email, $hashedPassword]);

        echo "<script>alert('Pendaftaran Berhasil! Anda Sekarang Bisa Login'); window.location.href='login.html';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Pendaftaran gagal! Error: " . $e->getMessage() . "');</script>";
    }
}

?>