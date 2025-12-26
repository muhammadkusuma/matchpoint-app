<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>CourtVision - Booking Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-lg bg-white rounded-lg shadow-xl overflow-hidden m-4">
        <div class="bg-blue-600 px-6 py-4">
            <h4 class="text-xl font-bold text-white">Form Booking Lapangan</h4>
        </div>

        <div class="p-8">
            <form action="" method="POST">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nama Member</label>
                    <div class="relative">
                        <select name="user_id"
                            class="block appearance-none w-full bg-gray-50 border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                            <option value="1">Budi Santoso</option>
                            <option value="2">Andi Pratama</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Pilih Lapangan</label>
                    <div class="relative">
                        <select name="field_id"
                            class="block appearance-none w-full bg-gray-50 border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                            <optgroup label="Futsal">
                                <option value="1">Lapangan Futsal A (Rumput)</option>
                                <option value="2">Lapangan Futsal B (Vinyl)</option>
                            </optgroup>
                            <optgroup label="Badminton">
                                <option value="3">Court 1</option>
                                <option value="4">Court 2</option>
                            </optgroup>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Tanggal Main</label>
                    <input type="date" name="booking_date"
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Jam Mulai</label>
                        <input type="time" name="start_time"
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Jam Selesai</label>
                        <input type="time" name="end_time"
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                        Simpan Booking
                    </button>
                </div>
                <div class="mt-4 text-center">
                    <a href="bookings.html" class="text-sm text-gray-500 hover:text-gray-800">Batalkan & Kembali</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>