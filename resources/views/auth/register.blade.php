@extends('layouts.guest')

@section('title', 'Daftar - CourtVision')

@section('content')
    <div class="mb-8">
        <h3 class="text-2xl font-bold text-slate-900">Buat Akun Baru 🚀</h3>
        <p class="text-slate-500 mt-2">Mulai kelola jadwal olahraga Anda dengan mudah.</p>
    </div>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 outline-none"
                placeholder="John Doe">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
            <input type="email" name="email" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 outline-none"
                placeholder="nama@email.com">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
            <input type="password" name="password" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 outline-none"
                placeholder="••••••••">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 outline-none"
                placeholder="••••••••">
        </div>

        <button type="submit"
            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-lg transition-all mt-4">
            Daftar Akun
        </button>
    </form>

    <div class="mt-8 text-center">
        <p class="text-slate-600">Sudah punya akun?
            <a href="{{ route('login') }}" class="font-bold text-emerald-600 hover:underline">Login disini</a>
        </p>
    </div>
@endsection