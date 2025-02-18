<?php
include 'crudmp.php';

$mapel = bacaSemuaMapel();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Pelajaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-7xl mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Data Mata Pelajaran</h1>
            <a href="tambahMapel.php" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Tambah Mapel
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Kode Mapel</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Nama Mapel</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Jumlah Jam</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        if ($mapel == null) {
                            echo "<tr><td colspan='4' class='px-6 py-4 text-center text-gray-500'>Tidak ada data mapel</td></tr>";
                        } else {
                            foreach ($mapel as $m) {
                                echo "<tr class='hover:bg-gray-50 transition-colors'>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>".$m['kodemapel']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>".$m['namamapel']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-900'>".$m['jmljam']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2'>
                                    <a href='editMapel.php?kodemapel=".$m['kodemapel']."' class='inline-flex items-center px-3 py-2 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white rounded-md transition-colors'>
                                        <svg class='w-4 h-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'/>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href='prosesHapusMp.php?kodemapel=".$m['kodemapel']."' class='inline-flex items-center px-3 py-2 border border-red-500 text-red-500 hover:bg-red-500 hover:text-white rounded-md transition-colors'>
                                        <svg class='w-4 h-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
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