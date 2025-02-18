<?php
include 'crudsiswa.php';

if (isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    tambahSiswa($nis, $nama, $jk, $jurusan);
    header('location:bacasiswa2.php');
}
    
?>
<script>
    alert('Data Gagal Ditambahkan');
    window.location.href = 'bacasiswa2.php';
</script>