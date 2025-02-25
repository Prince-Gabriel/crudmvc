<?php

include 'koneksi.php';

function bacaMapel($sql) {
    $data = array();
    $koneksi = koneksiAkademi();
    $hasil = mysqli_query ($koneksi, $sql);
    if (mysqli_num_rows($hasil)==0) {
        mysqli_close($koneksi);
        return null;
    }

    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['kodemapel']=$baris['kodemapel'];
        $data[$i]['namamapel']=$baris['namamapel'];
        $data[$i]['jmljam']=$baris['jmljam'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaMapel(){
    $sql = "SELECT * FROM matapelajaran";
    return bacaMapel($sql);
}

function cariMapel($cari){  
    $sql = "SELECT * FROM matapelajaran 
            WHERE kodemapel = '$cari' 
            OR namamapel LIKE '%$cari%'";
    return bacaMapel($sql);
}

function tambahMapel($kodemapel, $namamapel, $jmljam){
    $sql = "INSERT INTO matapelajaran (kodemapel, namamapel, jmljam) VALUES ('$kodemapel', '$namamapel', '$jmljam')";
    return mysqli_query(koneksiAkademi(), $sql);
}

function editMapel($kodemapel, $namamapel, $jmljam){
    $sql = "UPDATE matapelajaran SET namamapel = '$namamapel', jmljam = '$jmljam' WHERE kodemapel = '$kodemapel'";
    return mysqli_query(koneksiAkademi(), $sql);
}

function hapusMapel($kodemapel){
    $sql = "DELETE FROM matapelajaran WHERE kodemapel = '$kodemapel'";
    return mysqli_query(koneksiAkademi(), $sql);
}

?>