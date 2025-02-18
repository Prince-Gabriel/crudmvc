<?php

include 'crudSiswa.php';

$selectedJurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST" action=''>
                <fieldset class="space-y-4">
                    <legend class="text-xl font-semibold mb-4">Pilih Jurusan</legend>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jurusan" value="RPL" class="form-radio text-blue-600">
                            <span>RPL</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jurusan" value="TBG" class="form-radio text-blue-600">
                            <span>TBG</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jurusan" value="PH" class="form-radio text-blue-600">
                            <span>PH</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jurusan" value="UPW" class="form-radio text-blue-600">
                            <span>UPW</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="jurusan" value="TBS" class="form-radio text-blue-600">
                            <span>TBS</span>
                        </label>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                        Cari Data
                    </button>
                </fieldset>
            </form>
        </div>

        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
        <?php
            if ($selectedJurusan) {
                $data = bacaPerJurusan($selectedJurusan);
            } else {
                $data = bacaSemuaSiswa();
            }

            if ($data == null) {
                echo '<p class="text-gray-600">Tidak ada data ditemukan</p>';
            } else {
        ?>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                        foreach ($data as $siswa) {
                            echo "
                            <tr class='hover:bg-gray-50 transition-colors'>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>{$siswa['NIS']}</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>{$siswa['Nama']}</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>{$siswa['Jkel']}</td>
                                <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>{$siswa['Jurusan']}</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>
</body>
</html>