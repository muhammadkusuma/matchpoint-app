<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourtVision - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto font-bold text-xl">
            CourtVision Admin
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-6 text-gray-700">Dashboard & Insight</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-6">
                <div class="font-semibold text-green-100 mb-2">Pendapatan Bulan Ini</div>
                <h3 class="text-3xl font-bold">Rp 15.400.000</h3>
                <p class="text-sm mt-2 opacity-80">Dari total booking selesai</p>
            </div>

            <div class="bg-blue-500 text-white rounded-lg shadow-lg p-6">
                <div class="font-semibold text-blue-100 mb-2">Booking Hari Ini</div>
                <h3 class="text-3xl font-bold">12 Slot</h3>
                <p class="text-sm mt-2 opacity-80">Jadwal lapangan padat</p>
            </div>

            <div class="bg-yellow-500 text-white rounded-lg shadow-lg p-6">
                <div class="font-semibold text-yellow-100 mb-2">Status Pending</div>
                <h3 class="text-3xl font-bold">4 Transaksi</h3>
                <p class="text-sm mt-2 opacity-80">Perlu konfirmasi admin</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="bg-gray-50 border-b px-6 py-4 font-semibold text-gray-700">
                Ketersediaan Lapangan Saat Ini
            </div>
            <div class="p-0 overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 text-sm uppercase">
                            <th class="px-6 py-3 border-b">Nama Lapangan</th>
                            <th class="px-6 py-3 border-b">Kategori</th>
                            <th class="px-6 py-3 border-b">Status</th>
                            <th class="px-6 py-3 border-b">Harga/Jam</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 border-b">Lapangan Futsal A</td>
                            <td class="px-6 py-4 border-b">Futsal</td>
                            <td class="px-6 py-4 border-b">
                                <span
                                    class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">Available</span>
                            </td>
                            <td class="px-6 py-4 border-b">Rp 100.000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 border-b">Lapangan Badminton 1</td>
                            <td class="px-6 py-4 border-b">Badminton</td>
                            <td class="px-6 py-4 border-b">
                                <span
                                    class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-semibold">Maintenance</span>
                            </td>
                            <td class="px-6 py-4 border-b">Rp 40.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>