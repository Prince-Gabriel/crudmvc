<?php
include 'crudsiswa.php';

$nis = $_GET['nis'];
$siswa = cariSiswa($nis)[0];


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-2xl font-bold mb-4">Edit Data Siswa</h1>
            <form method="POST" action="prosesEdit.php" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                    <input type="text" name="nis" value="<?php echo $nis; ?>" readonly class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                    <input type="text" name="nama" required value="<?php echo $siswa['Nama']; ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <input type="radio" name="jk" value="LAKI" required <?php echo ($siswa['Jkel'] == 'LAKI') ? 'checked' : ''; ?> class="mr-2">Laki-laki
                    <input type="radio" name="jk" value="PEREMPUAN" required <?php echo ($siswa['Jkel'] == 'PEREMPUAN') ? 'checked' : ''; ?> class="mr-2">Perempuan
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                    <select name="jurusan" id="jurusan" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <?php
                        $jurusan = ['RPL', 'TBG', 'TBS', 'PH', 'ULW'];
                        foreach ($jurusan as $j) {
                            $selected = ($siswa['Jurusan'] == $j) ? 'selected' : '';
                            echo "<option value=\"$j\" $selected>$j</option>";
                        }
                        ?>
                        <option value="RPL">RPL</option>
                        <option value="TBG">TBG</option>
                        <option value="TBS">TBS</option>
                        <option value="PH">PH</option>
                        <option value="ULW">ULW</option>
                    </select>
                </div>
                <div>
                    <button type="submit" name="edit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>