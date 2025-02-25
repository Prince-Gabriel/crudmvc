<?php
include 'crudmp.php';

$mapel = isset($_GET['cari']) ? cariMapel($_GET['cari']) : bacaSemuaMapel();

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Pelajaran</title>
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

    <div class="max-w-7xl mx-auto px-4">
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-gray-900">Data Mata Pelajaran</h1>
                <div class="flex items-center gap-4">
                    <form method="GET" class="flex">
                        <input type="text" name="cari" placeholder="Cari mata pelajaran..." 
                               class="w-64 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                               value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white hover:bg-indigo-700 rounded-r-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </form>
                    <a href="tambahMapel.php" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Tambah Mapel
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Mapel</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mapel</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Jam</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php
                        if ($mapel == null) {
                            echo "<tr><td colspan='4' class='px-6 py-8 text-center text-gray-500'>Tidak ada data mata pelajaran yang ditemukan</td></tr>";
                        } else {
                            foreach ($mapel as $m) {
                                echo "<tr class='hover:bg-gray-50 transition-colors'>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$m['kodemapel']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>".$m['namamapel']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>".$m['jmljam']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2'>
                                    <a href='editMapel.php?kodemapel=".$m['kodemapel']."' class='inline-flex items-center px-3 py-1.5 bg-yellow-50 border border-yellow-500 text-yellow-600 hover:bg-yellow-500 hover:text-white rounded-lg transition-colors'>
                                        <svg class='w-4 h-4 mr-1.5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'/>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href='prosesHapusMp.php?kodemapel=".$m['kodemapel']."' class='inline-flex items-center px-3 py-1.5 bg-red-50 border border-red-500 text-red-600 hover:bg-red-500 hover:text-white rounded-lg transition-colors'>
                                        <svg class='w-4 h-4 mr-1.5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'/>
                                        </svg>
                                        Hapus
                                    </a>
                                </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>