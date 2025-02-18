<?php
include 'crudmp.php';

$kodemapel = $_GET['kodemapel'];
$mapel = cariMapel($kodemapel)[0];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mapel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-2xl font-bold mb-4">Edit Data Mapel</h1>
        </div>
        <form method="POST" action="prosesEditMp.php" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kode Mapel</label>
                <input type="text" name="kodemapel" value="<?php echo $mapel['kodemapel']; ?>" readonly class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Mapel</label>
                <input type="text" name="namamapel" value="<?php echo $mapel['namamapel']; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Jam</label>
                <input type="text" name="jmljam" value="<?php echo $mapel['jmljam']; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <button type="submit" name="edit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                    Edit
                </button>
            </div>
        </form>
    </div>
</body>
</html>