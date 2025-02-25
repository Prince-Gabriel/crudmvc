<?php

include 'koneksi.php';

$koneksi = koneksiAkademi();

function bacaSemuaUser() {
    global $koneksi;
    $sql = "SELECT * FROM user";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

function bacaUser($id) {
    global $koneksi;
    $sql = "SELECT * FROM user WHERE id = $id";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

function cariUser($username) {
    global $koneksi;
    $username = mysqli_real_escape_string($koneksi, $username);
    $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
    $hasil = mysqli_query($koneksi, $sql);
    return mysqli_fetch_assoc($hasil);
}

function tambahUser($username, $password, $nama) {
    global $koneksi;
    $username = mysqli_real_escape_string($koneksi, $username);
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0) {
        return false;
    }
    
    $sql = "INSERT INTO user (username, password, nama) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $nama);
    return mysqli_stmt_execute($stmt);
}

function updateUser($id, $username, $password, $nama) {
    global $koneksi;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "UPDATE user SET username = '$username', password = '$hashedPassword', nama = '$nama' WHERE id = $id";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

function hapusUser($id) {
    global $koneksi;
    $sql = "DELETE FROM user WHERE id = $id";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

?>