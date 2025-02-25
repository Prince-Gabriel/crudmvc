<?php
session_start();
include 'crudUser.php';

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$users = bacaSemuaUser();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Data User</h1>
                <div class="space-x-2">
                    <a href="dashboard.php" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <a href="tambahuser.php" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-plus"></i> Tambah User
                    </a>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Username</th>
                            <th class="px-6 py-3 border-b border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Password</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php 
                        $no = 1;
                        foreach($users as $user): 
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $no++ ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $user['username'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">••••••••</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>

