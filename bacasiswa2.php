<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

include ('crudSiswa.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
                <h1 class="text-3xl font-bold text-gray-900">Data Siswa</h1>
                <div class="flex items-center gap-4">
                    <a href="tambahSiswa.php" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Tambah Siswa
                    </a>
                </div>
            </div>
        </div>

        <?php
        $data = bacaSemuaSiswa();
        if ($data == null) {
            echo "<div class='bg-white rounded-xl shadow-sm p-6 text-center text-gray-500 border border-gray-200 mb-8'>
                    Tidak ada data siswa yang ditemukan
                  </div>";
        } else {
        ?>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php
                        foreach ($data as $siswa) {
                            echo "<tr class='hover:bg-gray-50 transition-colors'>";
                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>".$siswa['NIS']."</td>";
                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>".$siswa['Nama']."</td>";
                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>".$siswa['Jkel']."</td>";
                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>".$siswa['Jurusan']."</td>";
                            echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2'>
                                <a href='editSiswa.php?nis=".$siswa['NIS']."' class='inline-flex items-center px-3 py-1.5 bg-yellow-50 border border-yellow-500 text-yellow-600 hover:bg-yellow-500 hover:text-white rounded-lg transition-colors'>
                                    <svg class='w-4 h-4 mr-1.5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'/>
                                    </svg>
                                    Edit
                                </a>
                                <a href='prosesHapus.php?nis=".$siswa['NIS']."' onclick='return confirm(\"Yakin ingin menghapus data?\")' class='inline-flex items-center px-3 py-1.5 bg-red-50 border border-red-500 text-red-600 hover:bg-red-500 hover:text-white rounded-lg transition-colors'>
                                    <svg class='w-4 h-4 mr-1.5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'/>
                                    </svg>
                                    Hapus
                                </a>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>