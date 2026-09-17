<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internusa - Platform Kursus Online Terbaik & Tersertifikasi</title>
    <!-- Tailwind CSS CDN -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo_internusa.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <!-- HEADER / NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-blue-500/30">
                    I
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-slate-900">Intern<span class="text-blue-600">usa</span></span>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 font-medium text-slate-600">
                <a href="#home" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#features" class="hover:text-blue-600 transition">Keunggulan</a>
                <a href="#courses" class="hover:text-blue-600 transition">Kursus</a>
                <a href="#testimonials" class="hover:text-blue-600 transition">Testimoni</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center gap-4">
                <a href="{{ route('login') }}" class="text-slate-600 font-semibold hover:text-blue-600 transition">Masuk</a>
                <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-xl shadow-lg shadow-blue-600/20 transition-all transform hover:-translate-y-0.5">Daftar Gratis</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-slate-700 text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pt-2 pb-6 bg-white border-b border-slate-100 space-y-3">
            <a href="#home" class="block py-2 text-slate-600 font-medium">Beranda</a>
            <a href="#features" class="block py-2 text-slate-600 font-medium">Keunggulan</a>
            <a href="#courses" class="block py-2 text-slate-600 font-medium">Kursus</a>
            <a href="#testimonials" class="block py-2 text-slate-600 font-medium">Testimoni</a>
            <div class="pt-4 flex flex-col gap-3">
                <a href="#courses" class="text-center py-2.5 text-slate-700 font-semibold border border-slate-200 rounded-xl">Masuk</a>
                <a href="#courses" class="text-center py-2.5 bg-blue-600 text-white font-semibold rounded-xl shadow-md">Daftar Gratis</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="relative overflow-hidden pt-16 pb-24 lg:pt-28 lg:pb-32 bg-gradient-to-b from-blue-50/50 via-white to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-sm font-semibold tracking-wide">
                        <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                        Platform Belajar No. 1 untuk Karier Impianmu
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        Wujudkan Skill Profesional Bersama <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Internusa</span>
                    </h1>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0">
                        Akses ratusan kursus online berkualitas tinggi dengan kurikulum industri terkini, mentor ahli berpengalaman, dan sertifikat resmi penunjang portofolio.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#courses" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-xl shadow-xl shadow-blue-600/30 text-center transition-all transform hover:-translate-y-1">
                            Mulai Belajar Sekarang <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#features" class="w-full sm:w-auto bg-white hover:bg-slate-50 text-slate-700 font-semibold px-8 py-4 rounded-xl border border-slate-200 text-center transition">
                            Pelajari Keunggulan
                        </a>
                    </div>
                    
                    <!-- Stats Badges -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-100 mt-8 max-w-lg mx-auto lg:mx-0">
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-slate-900">50K+</p>
                            <p class="text-sm text-slate-500 font-medium">Siswa Aktif</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-slate-900">200+</p>
                            <p class="text-sm text-slate-500 font-medium">Modul Kursus</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-slate-900">95%</p>
                            <p class="text-sm text-slate-500 font-medium">Terserap Kerja</p>
                        </div>
                    </div>
                </div>

                <!-- Right Visual / Image Card -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Background Glow Effect -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-2xl opacity-20 animate-pulse"></div>
                        
                        <div class="relative bg-white p-6 rounded-3xl shadow-2xl border border-slate-100 space-y-6">
                            <div class="flex items-center gap-4 bg-blue-50/50 p-4 rounded-2xl">
                                <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-xl font-bold shadow-md">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Full-Stack Web Developer</h4>
                                    <p class="text-xs text-slate-500">Mulai dari Dasar hingga Mahir</p>
                                </div>
                            </div>

                            <!-- Course Progress Dummy -->
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm font-semibold">
                                    <span class="text-slate-700">Progress Belajar Anda</span>
                                    <span class="text-blue-600">75%</span>
                                </div>
                                <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden">
                                    <div class="bg-blue-600 h-full rounded-full w-3/4"></div>
                                </div>
                            </div>

                            <!-- Live Mentor Tag -->
                            <div class="flex items-center justify-between pt-2 border-t border-slate-100">
                                <div class="flex -space-x-2">
                                    <img class="w-9 h-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100" alt="Mentor">
                                    <img class="w-9 h-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="Mentor">
                                    <img class="w-9 h-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" alt="Mentor">
                                </div>
                                <span class="text-xs bg-emerald-50 text-emerald-600 font-semibold px-3 py-1.5 rounded-full flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span> Live Mentoring
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-blue-600 font-bold uppercase tracking-wider text-sm">Kenapa Memilih Internusa?</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Fasilitas & Keunggulan Terbaik untuk Mendukung Kesuksesanmu
                </h3>
                <p class="text-slate-600">Kami merancang metode pembelajaran interaktif yang fokus pada praktik industri langsung agar kamu siap kerja.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-lg shadow-blue-600/30 group-hover:scale-110 transition">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Mentor Praktisi Ahli</h4>
                    <p class="text-slate-600 leading-relaxed">Belajar langsung dari para profesional top industri yang berpengalaman bertahun-tahun di bidangnya.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-lg shadow-indigo-600/30 group-hover:scale-110 transition">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Praktik & Proyek Nyata</h4>
                    <p class="text-slate-600 leading-relaxed">Bangun portofolio profesionalmu melalui studi kasus dan proyek riil yang biasa dikerjakan di perusahaan.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-emerald-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-lg shadow-emerald-600/30 group-hover:scale-110 transition">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Sertifikat Resmi</h4>
                    <p class="text-slate-600 leading-relaxed">Dapatkan sertifikat kelulusan terverifikasi yang dapat dibagikan langsung ke LinkedIn untuk melamar kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COURSES SECTION -->
    <section id="courses" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-blue-600 font-bold uppercase tracking-wider text-sm">Pilihan Kursus Populer</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Temukan Program Belajar yang Sesuai Minatmu
                </h3>
                <p class="text-slate-600">Pilih dari berbagai kategori kelas mulai dari pemrograman, desain grafis, hingga pemasaran digital.</p>
            </div>

            <!-- Courses Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Course Card 1 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?w=600" alt="Web Dev" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <span class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Programming</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-500 font-medium">
                                <span><i class="fa-regular fa-clock mr-1"></i> 12 Minggu</span>
                                <span><i class="fa-solid fa-star text-amber-400 mr-1"></i> 4.9 (1.2k ulasan)</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 hover:text-blue-600 transition">Full-Stack Web Development Mastery</h4>
                            <p class="text-slate-600 text-sm line-clamp-2">Kuasai pembuatan aplikasi web modern menggunakan Laravel, React, dan database terkini.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-100 mt-4">
                        <div>
                            <span class="text-xs text-slate-400 block line-through">Rp 1.500.000</span>
                            <span class="text-lg font-extrabold text-blue-600">Rp 399.000</span>
                        </div>
                        <button onclick="alert('Berhasil mendaftar course!')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2.5 rounded-xl text-sm transition">Daftar</button>
                    </div>
                </div>

                <!-- Course Card 2 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=600" alt="UI/UX Design" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <span class="absolute top-4 left-4 bg-indigo-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Design</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-500 font-medium">
                                <span><i class="fa-regular fa-clock mr-1"></i> 8 Minggu</span>
                                <span><i class="fa-solid fa-star text-amber-400 mr-1"></i> 4.8 (850 ulasan)</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 hover:text-blue-600 transition">UI/UX Design & Research Pro</h4>
                            <p class="text-slate-600 text-sm line-clamp-2">Pelajari cara merancang antarmuka aplikasi yang intuitif dan riset pengguna menggunakan Figma.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-100 mt-4">
                        <div>
                            <span class="text-xs text-slate-400 block line-through">Rp 1.200.000</span>
                            <span class="text-lg font-extrabold text-blue-600">Rp 299.000</span>
                        </div>
                        <button onclick="alert('Berhasil mendaftar course!')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2.5 rounded-xl text-sm transition">Daftar</button>
                    </div>
                </div>

                <!-- Course Card 3 -->
                <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600" alt="Digital Marketing" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <span class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-semibold px-3 py-1 rounded-full">Marketing</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-500 font-medium">
                                <span><i class="fa-regular fa-clock mr-1"></i> 6 Minggu</span>
                                <span><i class="fa-solid fa-star text-amber-400 mr-1"></i> 4.9 (940 ulasan)</span>
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 hover:text-blue-600 transition">Digital Marketing & SEO Mastery</h4>
                            <p class="text-slate-600 text-sm line-clamp-2">Strategi lengkap menaikkan omset bisnis lewat sosial media, iklan berbayar, dan optimasi SEO.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 flex items-center justify-between border-t border-slate-100 mt-4">
                        <div>
                            <span class="text-xs text-slate-400 block line-through">Rp 1.000.000</span>
                            <span class="text-lg font-extrabold text-blue-600">Rp 249.000</span>
                        </div>
                        <button onclick="alert('Berhasil mendaftar course!')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2.5 rounded-xl text-sm transition">Daftar</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <h2 class="text-blue-600 font-bold uppercase tracking-wider text-sm">Testimoni Alumni</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Apa Kata Mereka yang Telah Berhasil?
                </h3>
                <p class="text-slate-600">Ribuan alumni Internusa telah berhasil berkarier di perusahaan impian mereka.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col justify-between">
                    <p class="text-slate-700 italic mb-6">"Materi di Internusa sangat aplikatif. Mentornya sabar dan penjelasannya mudah dipahami bahkan untuk pemula seperti saya. Alhamdulillah sekarang sudah diterima kerja sebagai Backend Developer!"</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100" class="w-12 h-12 rounded-full object-cover" alt="Alumni">
                        <div>
                            <h5 class="font-bold text-slate-900">Sarah Anjani</h5>
                            <p class="text-xs text-blue-600 font-semibold">Backend Developer di Startup</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col justify-between">
                    <p class="text-slate-700 italic mb-6">"Sangat recommended! Kurikulumnya benar-benar up-to-date sesuai kebutuhan industri saat ini. Portofolio yang saya buat selama kursus sangat membantu saat interview kerja."</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" class="w-12 h-12 rounded-full object-cover" alt="Alumni">
                        <div>
                            <h5 class="font-bold text-slate-900">Rizky Pratama</h5>
                            <p class="text-xs text-blue-600 font-semibold">UI/UX Designer</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 flex flex-col justify-between">
                    <p class="text-slate-700 italic mb-6">"Belajar jadi lebih menyenangkan dengan adanya fitur Live Mentoring dan komunitas yang aktif saling support. Terima kasih Internusa!"</p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100" class="w-12 h-12 rounded-full object-cover" alt="Alumni">
                        <div>
                            <h5 class="font-bold text-slate-900">Dewi Lestari</h5>
                            <p class="text-xs text-blue-600 font-semibold">Digital Marketer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <div class="space-y-4 md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-lg">
                            I
                        </div>
                        <span class="text-2xl font-extrabold text-white tracking-tight">Internusa</span>
                    </div>
                    <p class="text-sm">Platform kursus online terbaik untuk meningkatkan keterampilan profesional dan siap menghadapi dunia kerja masa kini.</p>
                </div>
                <div>
                    <h5 class="text-white font-bold mb-4">Kategori</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#courses" class="hover:text-white transition">Pemrograman Web</a></li>
                        <li><a href="#courses" class="hover:text-white transition">Desain UI/UX</a></li>
                        <li><a href="#courses" class="hover:text-white transition">Digital Marketing</a></li>
                        <li><a href="#courses" class="hover:text-white transition">Data Science</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-white font-bold mb-4">Perusahaan</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-white font-bold mb-4">Ikuti Kami</h5>
                    <div class="flex space-x-4 text-lg">
                        <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="pt-8 text-center text-xs text-slate-500">
                &copy; 2026 Internusa. Hak Cipta Dilindungi Undang-Undang.
            </div>
        </div>
    </footer>

    <!-- Script for Mobile Menu Toggle -->
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>