<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Pelajaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Tambah Mata Pelajaran</h1>
            <p class="mt-2 text-gray-600">Silakan isi form berikut untuk menambah mata pelajaran baru</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="prosesTambahmp.php" method="POST" class="space-y-6">
                <div>
                    <label for="kodemapel" class="block text-sm font-medium text-gray-700 mb-2">Kode Mapel</label>
                    <input type="text" name="kodemapel" id="kodemapel" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Masukkan kode mapel" required>
                </div>

                <div>
                    <label for="namamapel" class="block text-sm font-medium text-gray-700 mb-2">Nama Mapel</label>
                    <input type="text" name="namamapel" id="namamapel"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Masukkan nama mapel" required>
                </div>

                <div>
                    <label for="jmljam" class="block text-sm font-medium text-gray-700 mb-2">Jumlah Jam</label>
                    <input type="number" name="jmljam" id="jmljam"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Masukkan jumlah jam" required>
                </div>

                <div class="flex gap-4">
                    <button type="submit" name="tambah"
                            class="px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                        Tambah
                    </button>
                    <a href="bacaMapel.php" 
                       class="px-6 py-2 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>