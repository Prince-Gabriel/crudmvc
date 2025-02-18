<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Data Siswa</h2>
        
        <form method="POST" action="prosesTambah.php" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                <input type="text" name="nis" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                <div class="space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="jk" value="LAKI" required 
                            class="form-radio text-blue-600">
                        <span class="ml-2">Laki-laki</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="jk" value="PEREMPUAN" required 
                            class="form-radio text-blue-600">
                        <span class="ml-2">Perempuan</span>
                    </label>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                <select name="jurusan" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Jurusan</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TBS">Tata Busana</option>
                    <option value="TBG">Tata Boga</option>
                    <option value="PH">Perhotelan</option>
                    <option value="ULW">Usaha Layanan Wisata</option>
                </select>
            </div>

            <button type="submit" name="tambah" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Tambah Siswa
            </button>
        </form>
    </div>
</body>
</html>