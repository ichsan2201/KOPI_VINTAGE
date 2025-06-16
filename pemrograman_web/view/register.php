    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar - KOPI VINTAGE</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-yellow-50">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-[#3e2c1c]">Daftar Akun</h2>
                    <p class="text-gray-600">Buat akun untuk melakukan reservasi</p>
                </div>

                <!-- <?php if($error): ?>
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <?= $error ?>
                    </div>
                <?php endif; ?> -->

                <form method="POST">
                    <div class="mb-4">
                        <label for="nama_user" class="block text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="nama_user" name="nama_user" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="telp" class="block text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="tel" id="telp" name="telp" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 mb-2">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <button type="submit"
                        class="w-full bg-[#3e2c1c] hover:bg-[#2e2115] text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-300">
                        Daftar
                    </button>
                    <div class="mt-4 text-center">
                        <a href="indexcust.php?modul=login" class="text-yellow-600 hover:underline">Sudah punya akun? Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
