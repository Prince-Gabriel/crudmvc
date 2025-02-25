<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

include 'crudmp.php';

$kodemapel = $_GET['kodemapel'];
$mapel = cariMapel($kodemapel)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mapel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-indigo-600 mb-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="dashboard.php" class="text-xl font-bold text-white hover:text-gray-200 transition-colors">
                        Sistem Akademi
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-white">
                        Selamat Datang, <?php echo $_SESSION['username']; ?>!
                    </span>
                    <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Edit Data Mapel</h1>
                <a href="bacaMapel.php" class="text-gray-500 hover:text-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <form method="POST" action="prosesEditMp.php" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kode Mapel</label>
                    <input type="text" name="kodemapel" value="<?php echo $mapel['kodemapel']; ?>" readonly 
                           class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Mapel</label>
                    <input type="text" name="namamapel" value="<?php echo $mapel['namamapel']; ?>" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Jam</label>
                    <input type="number" name="jmljam" value="<?php echo $mapel['jmljam']; ?>" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="flex justify-end space-x-3">
                    <a href="bacaMapel.php" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </a>
                    <button type="submit" name="edit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>