<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchPoint - Booking Lapangan Futsal & Badminton Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-slate-800 antialiased">

    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        M</div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">MatchPoint<span
                            class="text-emerald-600">.</span></span>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#features"
                        class="text-slate-500 hover:text-emerald-600 font-medium transition-colors">Fasilitas</a>
                    <a href="#pricing"
                        class="text-slate-500 hover:text-emerald-600 font-medium transition-colors">Harga</a>
                    <a href="#contact"
                        class="text-slate-500 hover:text-emerald-600 font-medium transition-colors">Lokasi</a>
                </div>

                <div class="flex items-center gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 font-medium hover:text-emerald-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="hidden md:block text-slate-600 font-medium hover:text-emerald-600 px-4 py-2">Masuk</a>
                        <a href="{{ route('register') }}"
                            class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-full font-semibold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Daftar Sekarang
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

            <span
                class="inline-block py-1 px-3 rounded-full bg-emerald-50 text-emerald-600 text-sm font-bold mb-6 border border-emerald-100">
                🚀 Platform Booking Olahraga No. #1
            </span>

            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8 leading-tight">
                Main Lebih Mudah,<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Sehat Lebih
                    Cepat.</span>
            </h1>

            <p class="mt-4 max-w-2xl mx-auto text-xl text-slate-500 mb-10">
                Cek jadwal real-time, booking lapangan favoritmu, dan bayar secara instan tanpa ribet antri atau
                telepon.
            </p>

            <div class="flex justify-center gap-4">
                <a href="{{ route('register') }}"
                    class="px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full font-bold text-lg transition-all shadow-xl shadow-emerald-600/30 flex items-center">
                    Mulai Booking
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#features"
                    class="px-8 py-4 bg-white text-slate-700 hover:bg-slate-50 border border-slate-200 rounded-full font-bold text-lg transition-all">
                    Lihat Fasilitas
                </a>
            </div>

            <div class="mt-16 relative mx-auto max-w-5xl">
                <div
                    class="bg-slate-900 rounded-2xl shadow-2xl p-2 overflow-hidden transform rotate-1 hover:rotate-0 transition-transform duration-500">
                    <img src="https://images.unsplash.com/photo-1552667466-07770ae110d0?q=80&w=2070&auto=format&fit=crop"
                        alt="App Dashboard" class="rounded-xl w-full opacity-90">
                </div>
                <div
                    class="absolute -bottom-10 -left-10 bg-white p-4 rounded-xl shadow-xl animate-bounce hidden md:block">
                    <div class="flex items-center gap-3">
                        <div class="bg-green-100 p-2 rounded-full text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase">Status</p>
                            <p class="text-sm font-bold text-slate-900">Booking Confirmed!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-full h-full -z-10">
            <div class="absolute top-0 w-full h-[800px] bg-gradient-to-b from-emerald-50/50 to-white"></div>
        </div>
    </section>

    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Kenapa Pilih MatchPoint?</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Kami menyediakan pengalaman olahraga terbaik dengan
                    fasilitas standar internasional.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Booking Real-time</h3>
                    <p class="text-slate-500 leading-relaxed">Cek ketersediaan lapangan secara langsung. Tidak perlu
                        takut jadwal bentrok atau double booking.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div
                        class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Lantai Standar FIFA</h3>
                    <p class="text-slate-500 leading-relaxed">Lapangan Futsal kami menggunakan rumput sintetis premium
                        dan lantai vinyl anti-slip untuk badminton.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center text-amber-600 mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Pembayaran Mudah</h3>
                    <p class="text-slate-500 leading-relaxed">Dukung pembayaran via transfer bank otomatis. Upload bukti
                        transfer dan sistem akan memverifikasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-3xl p-12 text-center relative overflow-hidden">
                <div
                    class="absolute top-0 left-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
                </div>

                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 relative z-10">Siap Untuk Berkeringat?</h2>
                <p class="text-slate-400 text-lg mb-8 max-w-xl mx-auto relative z-10">Jangan biarkan lapangan favoritmu
                    diambil orang lain. Booking sekarang sebelum kehabisan slot!</p>

                <a href="{{ route('register') }}"
                    class="inline-block px-10 py-4 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-xl relative z-10">
                    Buat Akun Gratis
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-slate-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <span class="font-bold text-2xl tracking-tight text-slate-900">MatchPoint<span
                            class="text-emerald-600">.</span></span>
                    <p class="text-slate-500 text-sm mt-2">© 2023 MatchPoint Sport Center. All rights reserved.</p>
                </div>
                <div class="flex gap-6">
                    <a href="#" class="text-slate-400 hover:text-emerald-600 transition-colors">Instagram</a>
                    <a href="#" class="text-slate-400 hover:text-emerald-600 transition-colors">WhatsApp</a>
                    <a href="#" class="text-slate-400 hover:text-emerald-600 transition-colors">Maps</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>