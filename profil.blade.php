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
                    <a href="/home"
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


    <section id="section-profil" class="bg-[#A3CCDA] pt-28 pb-20 text-center min-h-screen">
        <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
            <h2 class="text-4xl font-semibold mb-12 text-white">Profil Inspiratif Kami</h2>
            <div id="profilContainer" class="flex flex-wrap justify-center gap-8 sm:gap-10 md:gap-12 lg:gap-14">
                @php
                    $profiles = [
                        [
                            'nama' => 'Bagas Yudhoyono',
                            'jabatan' => 'UI/UX Designer',
                            'gambar' => 'images/profil1.png',
                            'deskripsi' =>
                                'Bagas berfokus pada pengalaman pengguna dan tampilan antarmuka yang intuitif.',
                        ],
                        [
                            'nama' => 'Rizky Pratama',
                            'jabatan' => 'Frontend Developer',
                            'gambar' => 'images/profil2.png',
                            'deskripsi' => 'Rizky ahli dalam teknologi frontend seperti Tailwind dan React.',
                        ],
                        [
                            'nama' => 'Siti Aisyah',
                            'jabatan' => 'Data Analyst',
                            'gambar' => 'images/profil3.png',
                            'deskripsi' => 'Siti berpengalaman dalam analisis data besar untuk kebutuhan bisnis.',
                        ],
                        [
                            'nama' => 'Dimas Nugraha',
                            'jabatan' => 'Backend Developer',
                            'gambar' => 'images/profil4.png',
                            'deskripsi' => 'Dimas menguasai Laravel dan pengelolaan API dengan keamanan tinggi.',
                        ],
                    ];
                @endphp

                @foreach ($profiles as $index => $profil)
                    <div
                        class="bg-white rounded-xl shadow-lg w-60 sm:w-64 p-6 text-center hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset($profil['gambar']) }}" alt="{{ $profil['nama'] }}"
                            class="w-28 h-28 mx-auto rounded-full object-cover mb-4 shadow-md">
                        <h3 class="text-lg font-semibold text-[#065084] drop-shadow-md">{{ $profil['nama'] }}</h3>
                        <p class="text-sm text-gray-600 mb-4 drop-shadow-sm">{{ $profil['jabatan'] }}</p>
                        <button onclick="openModal({{ $index }})"
                            class="bg-[#065084] text-white px-4 py-2 rounded-lg text-sm hover:bg-[#00345a] transition drop-shadow-md">
                            <i class="fa-solid fa-user"></i> Lihat Biodata
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="modalBiodata" class="hidden fixed inset-0  bg-black bg-opacity-60 items-center justify-center z-50 p-4">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative text-center">
            <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-500 hover:text-red-600 text-xl">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <img id="modal-gambar" src="" alt="Foto Profil"
                class="w-32 h-32 mx-auto rounded-full mb-3 object-cover shadow-md">
            <h3 id="modal-nama" class="text-2xl font-bold text-[#065084]"></h3>
            <p id="modal-jabatan" class="text-gray-500 mb-3"></p>
            <p id="modal-deskripsi" class="text-gray-700 text-sm leading-relaxed"></p>
        </div>
    </div>

    <script>
        const profiles = @json($profiles);

        function openModal(index) {
            const p = profiles[index];
            document.getElementById('modal-gambar').src = "{{ asset('') }}" + p.gambar;
            document.getElementById('modal-nama').innerText = p.nama;
            document.getElementById('modal-jabatan').innerText = p.jabatan;
            document.getElementById('modal-deskripsi').innerText = p.deskripsi;

            const modal = document.getElementById('modalBiodata');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('modalBiodata');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>

</html>
