<?php
include 'koneksi.php';
include 'crudUser.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)) {
        $_SESSION['error'] = "Username dan password harus diisi!";
        header('location:login.php');
        exit();
    }
    
    $user = cariUser($username);
    
    if($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        header('location:index.php');
        exit();
    } else {
        $_SESSION['error'] = "Username atau password salah!";
        header('location:login.php');
        exit();
    }
}
