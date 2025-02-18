<?php
include ('crudSiswa.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Daftar Siswa</h1>
    
    <div class="mb-4">
        <a href="tambahSiswa.php" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Tambah Siswa
        </a>
    </div>

    <?php
        $data = bacaSemuaSiswa();
        if ($data == null){
            echo "<div class='bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4'>Tidak ada record ditemukan</div>";
        }
    ?>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">NIS</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Kelamin</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jurusan</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                    foreach ($data as $siswa) {
                        $nis = $siswa['NIS'];
                        $nama = $siswa['Nama'];
                        $jkl = $siswa['Jkel'];  
                        $jrusan = $siswa['Jurusan'];
                        echo "
                        <tr class='hover:bg-gray-50'>
                            <td class='px-6 py-4 whitespace-nowrap border-b border-gray-200'>$nis</td>
                            <td class='px-6 py-4 whitespace-nowrap border-b border-gray-200'>$nama</td>
                            <td class='px-6 py-4 whitespace-nowrap border-b border-gray-200'>$jkl</td>
                            <td class='px-6 py-4 whitespace-nowrap border-b border-gray-200'>$jrusan</td>
                            <td class='px-6 py-4 whitespace-nowrap border-b border-gray-200'>
                                <a href='editSiswa.php?nis=$nis' class='bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-sm mr-1'>Edit</a>
                                <a href='prosesHapus.php?nis=$nis' class='bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-sm' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Hapus</a>
                            </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>