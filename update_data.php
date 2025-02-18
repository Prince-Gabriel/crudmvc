<?php
require_once 'koneksi.php';

try {
    $sql = "UPDATE buku SET judul = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    $judul_baru = "Belajar PHP dan MySQL";
    $id = 1;
    
    $stmt->bind_param("si", $judul_baru, $id);
    
    if ($stmt->execute()) {
        echo "Data berhasil diupdate";
    } else {
        throw new Exception("Error mengupdate data: " . $stmt->error);
    }
    
    $stmt->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>