<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KOPI VINTAGE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 coffee-bg">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md relative z-10">
            <div class="text-center mb-8">
                <div class="inline-block mb-4">
                    <!-- Ikon kopi animasi -->
                    <svg class="w-16 h-16 mx-auto text-[#3e2c1c]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 8H19C20.1046 8 21 8.89543 21 10V11C21 12.1046 20.1046 13 19 13H18V8Z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M18 13V15C18 17.2091 16.2091 19 14 19H8C5.79086 19 4 17.2091 4 15V5C4 3.89543 4.89543 3 6 3H15C16.1046 3 17 3.89543 17 5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M4 11H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M7 16H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M10 8L10 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-[#3e2c1c]">Login Pelanggan</h2>
                <p class="text-gray-600">Masuk untuk melakukan reservasi</p>
            </div>
            
            <?php if(isset($error)): ?>
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            
            <form method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>
                <button type="submit" 
                        class="w-full bg-[#3e2c1c] hover:bg-[#2e2115] text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-300">
                    Masuk
                </button>
                <div class="mt-4 text-center">
                    <a href="indexcust.php?modul=register" class="text-yellow-600 hover:underline">Belum punya akun? Daftar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Animasi tambahan untuk ikon kopi
        document.addEventListener('DOMContentLoaded', function() {
            const coffeeIcon = document.querySelector('svg');
            coffeeIcon.style.transition = 'transform 0.5s ease';
            
            coffeeIcon.addEventListener('mouseenter', () => {
                coffeeIcon.style.transform = 'scale(1.1)';
            });
            
            coffeeIcon.addEventListener('mouseleave', () => {
                coffeeIcon.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>