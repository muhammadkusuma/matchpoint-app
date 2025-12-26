<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>CourtVision - Data Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="container mx-auto p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-700">Daftar Booking Masuk</h2>
            <a href="create_booking.html"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow transition duration-300">
                + Booking Baru
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-800 text-white text-left text-xs uppercase font-semibold tracking-wider">
                        <th class="px-5 py-3">ID</th>
                        <th class="px-5 py-3">Pelanggan</th>
                        <th class="px-5 py-3">Lapangan</th>
                        <th class="px-5 py-3">Waktu</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-5 py-5 text-sm">#1001</td>
                        <td class="px-5 py-5 text-sm font-medium">Budi Santoso</td>
                        <td class="px-5 py-5 text-sm text-gray-600">Futsal A</td>
                        <td class="px-5 py-5 text-sm text-gray-600">
                            <div class="font-bold">25 Okt 2023</div>
                            <div class="text-xs">19:00 - 20:00</div>
                        </td>
                        <td class="px-5 py-5 text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                                <span aria-hidden="true"
                                    class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                <span class="relative">Pending</span>
                            </span>
                        </td>
                        <td class="px-5 py-5 text-sm space-x-2">
                            <button class="text-green-600 hover:text-green-900 font-semibold">Konfirmasi</button>
                            <button class="text-red-600 hover:text-red-900 font-semibold">Batal</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-5 py-5 text-sm">#1002</td>
                        <td class="px-5 py-5 text-sm font-medium">Siti Aminah</td>
                        <td class="px-5 py-5 text-sm text-gray-600">Badminton 3</td>
                        <td class="px-5 py-5 text-sm text-gray-600">
                            <div class="font-bold">25 Okt 2023</div>
                            <div class="text-xs">10:00 - 12:00</div>
                        </td>
                        <td class="px-5 py-5 text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden="true"
                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative">Confirmed</span>
                            </span>
                        </td>
                        <td class="px-5 py-5 text-sm">
                            <button class="text-gray-600 hover:text-gray-900 font-semibold">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>