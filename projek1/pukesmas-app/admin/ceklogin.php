<?php
if (isset($_POST['email'])) {
    session_start();
    require_once('dbkoneksi.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select * FROM user where email = ? and password = md5(?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$email, $password]);
    $row = $stmt->fetch();

    if ($row) {
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $row['nama'];
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('ada yang salah sepertinya');window.location.href='login.php'</script>";
    }
}

//SAYA UDH COBA PAK/BNG UDH MASUKIN GMAIL SAMA PW SUDAH SESUAI KENAPA TETAP SALAH YA
