<?php
include 'crudmp.php';

if (isset($_POST['edit'])) {
    $kodemapel = $_POST['kodemapel'];
    $namamapel = $_POST['namamapel'];
    $jmljam = $_POST['jmljam'];
    editMapel($kodemapel, $namamapel, $jmljam);
    header('location:bacaMapel.php');
}
?>