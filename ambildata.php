<?php
include("koneksi.php");
$koneksi = koneksiAkademi();
$sql = "select * from siswa";
$hasil = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <H2>Daftar Siswa</H2>
    <table border="2">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            if(mysqli_num_rows($hasil)>0){
                $no = 0;
                while($baris=mysqli_fetch_assoc($hasil)){
                    $nis = $baris['NIS'];
                    $nama = $baris['Nama'];
                    $kelamin = $baris['Jkel'];
                    $jurusan = $baris['Jurusan'];
                    $no++;
                    echo "<tr>
                            <th>$no</th>
                            <th>$nis</th>
                            <th>$nama</th>
                            <th>$kelamin</th>
                            <th>$jurusan</th>
                            <th>EDIT | HAPUS</th>
                        </tr>";
                }
            }else{echo "Tidak ada record";}
            mysqli_close($koneksi)
            ?>
        </tr>
    </table>
    </body>
</html>