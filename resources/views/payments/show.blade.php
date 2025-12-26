@extends('layouts.main')

@section('title', 'Detail Pembayaran - CourtVision')

@section('content')
    <div class="max-w-5xl mx-auto">

        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('bookings.my') }}"
                class="p-2 rounded-full bg-white border border-slate-200 hover:bg-slate-50 transition-colors">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
            </a>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Selesaikan Pembayaran</h2>
                <p class="text-slate-500 text-sm">Order ID: #{{ $booking->id }}</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 mb-8">
            <div class="flex items-center justify-between relative">
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-1 bg-slate-100 -z-0"></div>

                <div class="relative z-10 flex flex-col items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold mb-2 ring-4 ring-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-slate-800">Booking Dibuat</span>
                </div>

                <div class="relative z-10 flex flex-col items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold mb-2 ring-4 ring-white shadow-lg shadow-amber-500/30 animate-pulse">
                        2
                    </div>
                    <span class="text-sm font-bold text-slate-800">Lakukan Pembayaran</span>
                    <span class="text-xs text-amber-600 font-medium bg-amber-50 px-2 py-0.5 rounded-full mt-1">Proses Saat
                        Ini</span>
                </div>

                <div class="relative z-10 flex flex-col items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold mb-2 ring-4 ring-white">
                        3
                    </div>
                    <span class="text-sm font-medium text-slate-400">Verifikasi Admin</span>
                </div>

                <div class="relative z-10 flex flex-col items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold mb-2 ring-4 ring-white">
                        4
                    </div>
                    <span class="text-sm font-medium text-slate-400">Selesai</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">

                <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-4">
                    <svg class="w-6 h-6 text-amber-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h4 class="font-bold text-amber-900">Selesaikan sebelum {{ $booking->deadline->format('H:i') }} WIB
                        </h4>
                        <p class="text-sm text-amber-700 mt-1">Booking Anda akan otomatis dibatalkan jika bukti transfer
                            tidak diupload sebelum batas waktu berakhir.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="font-bold text-slate-900 text-lg">Transfer Bank (Otomatis)</h3>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="flex items-center justify-between p-4 border border-slate-200 rounded-xl bg-slate-50">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-white rounded-lg flex items-center justify-center border border-slate-200">
                                    <span class="font-bold text-blue-800 italic">BCA</span>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 uppercase tracking-wide">Bank Central Asia</p>
                                    <p class="text-lg font-mono font-bold text-slate-800">8820 9912 3344</p>
                                    <p class="text-sm text-slate-600">a.n PT CourtVision Indonesia</p>
                                </div>
                            </div>
                            <button class="text-emerald-600 hover:text-emerald-700 font-medium text-sm">Salin</button>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-500 mb-2">Total Nominal Transfer</label>
                            <div
                                class="flex items-center justify-between p-4 bg-emerald-50 border border-emerald-200 rounded-xl">
                                <span class="text-2xl font-bold text-emerald-700">Rp
                                    {{ number_format($booking->total_price, 0, ',', '.') }}</span>
                                <button class="text-emerald-600 hover:text-emerald-700 font-medium text-sm">Salin</button>
                            </div>
                            <p class="text-xs text-slate-500 mt-2">*Mohon transfer sesuai nominal hingga 3 digit terakhir.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="space-y-6">

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                    <h3 class="font-bold text-slate-900 mb-4">Ringkasan Booking</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-slate-200 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2093&auto=format&fit=crop"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">{{ $booking->field_name }}</h4>
                                <p class="text-xs text-slate-500 mt-1">
                                    {{ $booking->booking_date->translatedFormat('d F Y') }}</p>
                                <p class="text-xs text-slate-500">{{ $booking->time }}</p>
                            </div>
                        </div>
                        <div class="border-t border-slate-100 pt-4 flex justify-between items-center">
                            <span class="text-slate-600 font-medium">Total</span>
                            <span class="font-bold text-slate-900">Rp
                                {{ number_format($booking->total_price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                    <h3 class="font-bold text-slate-900 mb-4">Upload Bukti Transfer</h3>

                    <form action="{{ route('payments.upload', $booking->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div
                            class="border-2 border-dashed border-slate-300 rounded-xl p-6 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-slate-50 transition-colors mb-4 relative">
                            <input type="file" name="payment_proof"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                            <svg class="w-8 h-8 text-slate-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class="text-sm font-medium text-slate-600">Klik untuk upload gambar</p>
                            <p class="text-xs text-slate-400 mt-1">JPG, PNG max 2MB</p>
                        </div>

                        <button type="submit"
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-xl transition-all shadow-lg shadow-emerald-600/20">
                            Konfirmasi Pembayaran
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection