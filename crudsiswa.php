<?php
include 'koneksi.php';
function bacaSiswa($sql){
    $data = array();
    $koneksi = koneksiAkademi();
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil)==0) {
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['NIS']=$baris['NIS'];
        $data[$i]['Nama']=$baris['Nama'];
        $data[$i]['Jkel']=$baris['Jkel'];
        $data[$i]['Jurusan']=$baris['Jurusan'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaSiswa(){
    $sql = "SELECT * FROM siswa";
    return bacaSiswa($sql);
}

function bacaPerJurusan($jurusan){
    $sql = "SELECT * FROM siswa WHERE Jurusan = '$jurusan'";
    return bacaSiswa($sql);
}

function cariSiswa($cari){
    $sql = "SELECT * FROM siswa WHERE NIS = '$cari'";
    return bacaSiswa($sql);
}

function tambahSiswa($nis, $nama, $jk, $jurusan){
    $sql = "INSERT INTO siswa (NIS, Nama, Jkel, Jurusan) VALUES ('$nis', '$nama', '$jk', '$jurusan')";
    return mysqli_query(koneksiAkademi(), $sql);
}

function editSiswa($nis, $nama, $jk, $jurusan){
    $sql = "UPDATE siswa SET Nama = '$nama', Jkel = '$jk', Jurusan = '$jurusan' WHERE NIS = '$nis'";
    return mysqli_query(koneksiAkademi(), $sql);
}

function hapusSiswa($nis){
    $sql = "DELETE FROM siswa WHERE NIS = '$nis'";
    return mysqli_query(koneksiAkademi(), $sql);
}








