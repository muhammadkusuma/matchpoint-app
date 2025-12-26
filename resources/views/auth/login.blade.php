@extends('layouts.guest')

@section('title', 'Login - CourtVision')

@section('content')
    <div class="mb-8">
        <h3 class="text-2xl font-bold text-slate-900">Selamat Datang Kembali 👋</h3>
        <p class="text-slate-500 mt-2">Masukan email dan password untuk mengakses dashboard.</p>
    </div>

    <form action="{{ route('login') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
            <input type="email" name="email" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                placeholder="nama@email.com">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
            <input type="password" name="password" required
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                placeholder="••••••••">
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center">
                <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                <span class="ml-2 text-sm text-slate-600">Ingat Saya</span>
            </label>
            <a href="#" class="text-sm font-medium text-emerald-600 hover:text-emerald-500">Lupa Password?</a>
        </div>

        <button type="submit"
            class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 rounded-lg transition-all transform hover:scale-[1.02]">
            Masuk Sekarang
        </button>
    </form>

    <div class="mt-8 text-center">
        <p class="text-slate-600">Belum punya akun?
            <a href="{{ route('register') }}" class="font-bold text-emerald-600 hover:underline">Daftar disini</a>
        </p>
    </div>
@endsection