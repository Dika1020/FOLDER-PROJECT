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
        echo "<script>alert('ada yang salah sepertinya');window.location.href='login.html'</script>";
    }
}

//gmail : dika123@gmail.com pw : akurajin123
  
