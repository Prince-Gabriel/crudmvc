<?php
include 'crudsiswa.php';

if (isset($_POST['edit'])) {
    try {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
        
        error_log("Mencoba mengedit siswa - NIS: $nis, Nama: $nama, JK: $jk, Jurusan: $jurusan");
        
        $result = editSiswa($nis, $nama, $jk, $jurusan);
        
        if ($result) {
            error_log("Edit siswa berhasil untuk NIS: $nis");
            header('location:bacasiswa2.php');
            exit();
        } else {
            throw new Exception("Gagal mengupdate data siswa");
        }
    } catch (Exception $e) {
        error_log("Error saat edit siswa: " . $e->getMessage());
?>
        <script>
            alert('Data Gagal Diubah: <?php echo $e->getMessage(); ?>');
            window.location.href = 'bacasiswa2.php';
        </script>
<?php
    }
} else {
    error_log("Form edit tidak disubmit dengan benar");
    header('location:bacasiswa2.php');
    exit();
}
?>

