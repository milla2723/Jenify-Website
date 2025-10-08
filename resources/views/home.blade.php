<!doctype html>
<html lang="id">

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

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        section {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .text-shadow {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body class="antialiased text-white min-h-screen font-montserrat ">
    <nav class="backdrop-blur-md shadow-md fixed w-full z-10 top-0 left-0 ">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2 mb-4">
                    <img src="{{ asset('images/Logo Navbar.png') }}" alt="Logo" class="h-20">
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#"
                        class="text-white text-shadow px-4 py-2 rounded-md bg-transparent hover:bg-white/90 hover:text-blue-600 font-medium transition">Beranda</a>
                    <a href="/profil"
                        class="text-white text-shadow px-4 py-2 rounded-md bg-transparent hover:bg-white/90 hover:text-blue-600 font-medium transition">Profil</a>
                    <a href="#section-artikel"
                        class="text-white text-shadow px-4 py-2 rounded-md bg-transparent hover:bg-white/90 hover:text-blue-600 font-medium transition">Artikel</a>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="bg-white text-[#001c39] px-4 py-2 rounded-md hover:bg-[#001c39] hover:text-white transition duration-200">
                        Hubungi Kami
                    </a>
                    <a href="/login"
                        class="border border-white text-white px-4 py-2 rounded-md font-medium hover:bg-white hover:text-[#001c39] transition duration-200">
                        <i class="fa-solid fa-right-to-bracket mr-1"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        <section
            class="min-h-screen flex items-center justify-center bg-no-repeat bg-cover bg-center bg-[url('/images/background.png')]">
            <div class="max-w-4xl mx-auto px-6 text-center space-y-3">
                <h1 class="text-4xl font-bold text-white mb-2 font-prata">
                    Selamat Datang di Jenify Tech Academy
                </h1>
                <p class="text-md text-white leading-relaxed max-w-2xl mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>

                <div class="mt-4">
                    <form class="flex flex-col sm:flex-row justify-center gap-2 max-w-xl mx-auto" role="search"
                        onsubmit="event.preventDefault(); alert('Pencarian: ' + document.getElementById('q').value);">
                        <label for="q" class="sr-only">Pencarian</label>
                        <input id="q" name="q" type="search" placeholder="Cari di sini..."
                            class="flex-1 px-4 py-3 rounded-lg border border-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
                        <button type="submit"
                            class="px-6 py-3 rounded-lg bg-[#065084] text-white font-medium hover:bg-[#001c39] transition">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section id="section-digital" class="bg-[#A3CCDA] py-16 text-center">
            <div class="max-w-5xl mx-auto px-6">
                <h2 class="text-4xl font-extrabold text-white mb-4">
                    Persiapkan Anak Anda <br> Untuk Dunia Digital
                </h2>
                <p class="text-white mb-8 leading-relaxed">
                    Di <span class="font-semibold text-[#001c39]">Jҽɳιϝყ Academy</span>, kami memahami pentingnya
                    pengalaman belajar
                    yang sesuai dengan usia
                    untuk menumbuhkan minat anak dalam ilmu komputer. Program kami dirancang dengan cermat agar anak
                    tidak hanya belajar coding,
                    tetapi juga mengembangkan keterampilan digital masa depan.
                </p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 mt-10">
                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-flask text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA] ">Computer Scientist</h3>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-briefcase text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA]">Business Fundamental</h3>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-gamepad text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA]">Game Design</h3>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-robot text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA]">Robotic Engineering</h3>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-mobile-screen text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA]">App Development</h3>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-5 hover:-translate-y-2 transition-transform">
                        <i class="fa-solid fa-palette text-[#A3CCDA] text-4xl mb-3"></i>
                        <h3 class="text-sm font-semibold text-[#A3CCDA]">Creative Digital Design</h3>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <button id="btn-lihat-semua-berita"
                    class="bg-[#065084] text-white px-6 py-2 rounded-lg hover:bg-[#001c39] transition">
                    Jelajahi Program Kami
                </button>
            </div>
        </section>


        <section class="bg-[#A3CCDA] text-center">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl font-semibold mb-4">Lokasi Kami</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253907.52610588935!2d106.45468908671874!3d-6.089538099999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d166c9ef987%3A0xada7d03125ee992c!2sCoding%20Bee%20Academy%20(PIK%20Campus)!5e0!3m2!1sid!2sid!4v1759399417639!5m2!1sid!2sid"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl shadow-lg">
                </iframe>
            </div>
        </section>

        <footer class="bg-[#1C6EA4]/60 text-white py-10">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <img src="{{ asset('images/Logo Navbar.png') }}" alt="Logo" class="h-16">
                    </div>
                    <p class="text-sm leading-relaxed text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                    </p>
                    <div class="flex space-x-3 mt-4">
                        <a href="#" class="hover:text-white">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-white">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                        <a href="#" class="hover:text-white"><i class="fab fa-x-twitter text-2xl"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="#section-profil" class="hover:text-white transition">Profil</a></li>
                        <li><a href="#section-artikel" class="hover:text-white transition">Artikel</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Bantuan</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-white pt-6 text-center text-sm text-white mx-14"> © 2025 Website Kami.
                Semua Hak Dilindungi. </div>
        </footer>
    </main>
</body>

<script></script>


</html>
