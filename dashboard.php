<?php
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
    <title>Dashboard Akademi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-indigo-600">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-white">Sistem Akademi</span>
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

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Mata Pelajaran Card -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-400">Mata Pelajaran</span>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Data Mapel</h2>
                <p class="text-gray-600 mb-4 text-sm">Kelola data mata pelajaran termasuk kode, nama, dan jumlah jam.</p>
                <a href="bacaMapel.php" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium">
                    Lihat Data
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Siswa Card -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-400">Siswa</span>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Data Siswa</h2>
                <p class="text-gray-600 mb-4 text-sm">Kelola data siswa termasuk NIS, nama, jenis kelamin, dan jurusan.</p>
                <a href="bacasiswa2.php" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-medium">
                    Lihat Data
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- User Card -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-100 rounded-lg">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-400">User</span>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Data User</h2>
                <p class="text-gray-600 mb-4 text-sm">Kelola data pengguna sistem termasuk username dan hak akses.</p>
                <a href="bacauser.php" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-medium">
                    Lihat Data
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Info Cards -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 font-medium">Status Sistem</p>
                        <p class="text-lg font-semibold text-blue-600">Aktif</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 font-medium">Login Sebagai</p>
                        <p class="text-lg font-semibold text-green-600"><?php echo $_SESSION['username']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>