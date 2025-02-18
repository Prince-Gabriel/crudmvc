<?php


function koneksiAkademi() { 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "akademik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}