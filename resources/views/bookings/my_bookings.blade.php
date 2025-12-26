@extends('layouts.main')

@section('title', 'Booking Saya - CourtVision')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900">Riwayat Booking Saya</h2>
        <p class="text-slate-500 text-sm">Lihat jadwal main dan status pembayaran Anda.</p>
    </div>

    <div class="space-y-6">
        @foreach($bookings as $booking)
            <div
                class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col md:flex-row hover:shadow-md transition-shadow">

                <div
                    class="bg-slate-50 p-6 flex flex-col justify-center items-center md:w-48 border-b md:border-b-0 md:border-r border-dashed border-slate-300 relative">
                    <div class="absolute -top-3 -right-3 w-6 h-6 bg-slate-50 md:bg-white rounded-full hidden md:block"></div>
                    <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-slate-50 md:bg-white rounded-full hidden md:block"></div>

                    <span
                        class="text-slate-500 font-medium text-sm uppercase tracking-wider">{{ \Carbon\Carbon::parse($booking->date)->format('M Y') }}</span>
                    <span
                        class="text-4xl font-bold text-slate-800 my-1">{{ \Carbon\Carbon::parse($booking->date)->format('d') }}</span>
                    <span class="text-slate-600 font-semibold">{{ \Carbon\Carbon::parse($booking->date)->format('l') }}</span>

                    <div class="mt-3 px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-700">
                        {{ $booking->time }}
                    </div>
                </div>

                <div class="p-6 flex-1 flex gap-6 items-center">
                    <img src="{{ $booking->image }}" alt="Field"
                        class="w-20 h-20 rounded-lg object-cover bg-slate-200 hidden sm:block">

                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span
                                class="text-xs font-bold px-2 py-0.5 rounded text-emerald-700 bg-emerald-100 border border-emerald-200">
                                {{ $booking->category }}
                            </span>
                            <span class="text-xs text-slate-400">#{{ $booking->id }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">{{ $booking->field_name }}</h3>
                        <p class="text-slate-500 text-sm mt-1">Total: <span class="text-slate-900 font-semibold">Rp
                                {{ number_format($booking->price, 0, ',', '.') }}</span></p>
                    </div>
                </div>

                <div
                    class="p-6 md:w-64 flex flex-col justify-center items-end bg-slate-50/50 border-t md:border-t-0 md:border-l border-dashed border-slate-200">

                    @if($booking->status == 'pending')
                        <div class="text-right mb-4">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                Menunggu Pembayaran
                            </span>
                        </div>
                        <div class="flex gap-2 w-full">
                            <button
                                class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-700 text-sm font-semibold py-2 rounded-lg transition-colors">Batal</button>
                            <button
                                class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold py-2 rounded-lg transition-colors shadow-lg shadow-emerald-600/20">
                                Bayar
                            </button>
                        </div>

                    @elseif($booking->status == 'completed')
                        <div class="text-right">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600 mb-3">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Selesai
                            </span>
                            <button class="block w-full text-emerald-600 text-sm font-semibold hover:underline">
                                Booking Lagi
                            </button>
                        </div>

                    @else
                        <div class="text-right">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Dibatalkan
                            </span>
                        </div>
                    @endif

                </div>
            </div>
        @endforeach
    </div>

    @if(count($bookings) == 0)
        <div class="text-center py-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 mb-4">
                <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-slate-900">Belum ada booking</h3>
            <p class="text-slate-500 mt-1 mb-6">Kamu belum pernah memesan lapangan.</p>
            <a href="{{ url('/fields') }}"
                class="text-white bg-emerald-600 hover:bg-emerald-700 font-medium rounded-lg text-sm px-5 py-2.5">
                Cari Lapangan Sekarang
            </a>
        </div>
    @endif

@endsection