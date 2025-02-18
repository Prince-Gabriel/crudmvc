<?php
include 'crudsiswa.php';

if (isset($_GET['nis'])) {
    hapusSiswa($_GET['nis']);
    header('location:bacasiswa2.php');
}