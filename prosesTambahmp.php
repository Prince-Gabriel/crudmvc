<?php
include 'crudmp.php';

if (isset($_POST['tambah'])) {
    $kodemapel = $_POST['kodemapel'];
    $namamapel = $_POST['namamapel'];
    $jmljam = $_POST['jmljam'];
    tambahMapel($kodemapel, $namamapel, $jmljam);
    header('location:bacaMapel.php');
}
?>
<script>
    alert('Data Gagal Ditambahkan');
    window.location.href = 'bacaMapel.php';
</script>