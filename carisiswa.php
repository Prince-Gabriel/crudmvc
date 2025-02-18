<?php
include 'crudSiswa.php';

$nis = isset($_GET['nis']) ? $_GET['nis'] : null;
$siswa = null;

if ($nis) {
    $siswa = cariSiswa($nis);
    $siswa = $siswa ? $siswa[0] : null;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-2xl font-bold mb-4">Cari Siswa Berdasarkan NIS</h1>
            <form method="GET" action="" class="flex items-end gap-4">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Masukkan NIS</label>
                    <input type="text" name="nis" value="<?= $nis ?>" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Contoh: 123456789">
                </div>
                <button type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                    Cari
                </button>
            </form>
        </div>

        <?php if ($nis): ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <?php if ($siswa): ?>
                    <h2 class="text-xl font-semibold mb-4">Hasil Pencarian</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">NIS</p>
                            <p class="font-medium"><?= $siswa['NIS'] ?></p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Nama</p>
                            <p class="font-medium"><?= $siswa['Nama'] ?></p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Jenis Kelamin</p>
                            <p class="font-medium"><?= $siswa['Jkel'] ?></p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Jurusan</p>
                            <p class="font-medium"><?= $siswa['Jurusan'] ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <p class="text-gray-600">Siswa dengan NIS <?= $nis ?> tidak ditemukan</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
