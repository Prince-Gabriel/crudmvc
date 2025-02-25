<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Akademi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full px-6">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-600">Sistem Akademi</h1>
            <p class="text-gray-600 mt-2">Silakan login untuk melanjutkan</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Login</h2>

            <?php 
            session_start();
            if(isset($_SESSION['error'])) {
                echo '<div class="mb-6 p-4 bg-red-50 border border-red-500 text-red-600 rounded-lg">' . 
                     $_SESSION['error'] . 
                     '</div>';
                unset($_SESSION['error']);
            }
            ?>

            <form action="prosesLogin.php" method="POST" autocomplete="off" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <input type="text" name="username" required pattern="[a-zA-Z0-9]+" 
                           title="Hanya huruf dan angka diperbolehkan"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <button type="submit" 
                        class="w-full px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Login
                </button>
            </form>

            <p class="mt-6 text-center text-gray-600">
                Belum punya akun? 
                <a href="register.php" class="text-indigo-600 hover:text-indigo-700 font-medium">
                    Register di sini
                </a>
            </p>
        </div>
    </div>
</body>
</html>