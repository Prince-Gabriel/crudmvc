<?php

include 'crudUser.php';

session_start();

if(isset($_SESSION['username'])){
    header('location:bacaMapel.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['username'];

    if (empty($username) || empty($password)) {
        echo "<script>
            alert('Semua field harus diisi!');
            window.location='register.php';
        </script>";
        exit();
    }

    $hasil = tambahUser($username, $password, $nama);
    
    if ($hasil) {
        echo "<script>
            alert('Registrasi berhasil! Silakan login.');
            window.location='login.php';
        </script>";
    } else {
        echo "<script>
            alert('Username sudah digunakan! Silakan pilih username lain.');
            window.location='register.php';
        </script>";
    }
}
?> 