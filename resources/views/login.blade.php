<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Selamat Datang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Prata&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#A3CCDA] flex items-center justify-center min-h-screen font-montserrat">
    <div class="relative bg-white/90 border border-[#A3CCDA] shadow-lg rounded-2xl w-full max-w-md p-8">
        <div class="flex justify-center mb-0">
            <img src="{{ asset('images/logo navbar.png') }}" alt="Logo" class="h-20">
        </div>
        <h1 class="text-3xl font-bold text-center text-black mb-8">Masuk ke Akun Anda</h1>
        <form action="#" method="POST" class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-black mb-1">Email</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email" placeholder="email@domain.com" required
                        class="w-full border border-gray-300 rounded-md pl-10 pr-4 py-2 focus:ring-2 focus:ring-[#A3CCDA] focus:outline-none">
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-black mb-1">Password</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" placeholder="•••••••"
                        class="w-full border border-gray-300 rounded-md pl-10 pr-10 py-2 focus:ring-2 focus:ring-[#A3CCDA]focus:outline-none">
                    <button type="button" id="togglePassword"
                        class="absolute right-3 top-2.5 text-gray-500 hover:text-[#A3CCDA] cursor-pointer z-10 bg-transparent border-none">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <a href="#" class="text-sm text-black hover:underline">Lupa kata sandi?</a>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-200">
                Masuk
            </button>
        </form>
        <p class="text-center text-sm text-black mt-6">
            Belum punya akun?
            <a href="/register" class="text-black hover:underline">Daftar di sini</a>
        </p>
        <div class="flex justify-center mt-4">
            <a href="/home" class="text-sm text-[#001c39] hover:underline flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const icon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
