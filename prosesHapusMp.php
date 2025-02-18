<?php
include 'crudmp.php';

if (isset($_GET['kodemapel'])) {
    hapusMapel($_GET['kodemapel']);
    header('location:bacaMapel.php');
}





?>