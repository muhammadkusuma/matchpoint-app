<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CourtVision')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white">

    <div class="min-h-screen flex">

        <div class="hidden lg:block w-1/2 relative bg-slate-900">
            <img src="https://images.unsplash.com/photo-1552667466-07770ae110d0?q=80&w=2070&auto=format&fit=crop"
                alt="Sports Court" class="absolute inset-0 w-full h-full object-cover opacity-60">

            <div class="relative z-10 h-full flex flex-col justify-center px-12 text-white">
                <h2 class="text-4xl font-bold mb-6">Kelola Lapangan Lebih Mudah & Profesional.</h2>
                <p class="text-lg text-slate-300 max-w-md">Sistem manajemen booking futsal & badminton terintegrasi
                    untuk bisnis Anda.</p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="max-w-md w-full">
                <div class="lg:hidden mb-8 text-center">
                    <h1 class="text-2xl font-bold text-emerald-600">CourtVision.</h1>
                </div>

                @yield('content')
            </div>
        </div>

    </div>

</body>

</html>