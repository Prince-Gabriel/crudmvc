<?php
if (!function_exists('koneksiAkademi')) {
    function koneksiAkademi() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "akademik";
        
        $koneksi = mysqli_connect($host, $username, $password, $database);
        
        if(!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        
        return $koneksi;
    }
}