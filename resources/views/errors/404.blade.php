@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-blue-700 mb-4">404</h1>
        <p class="text-xl text-gray-600 mb-8">Halaman tidak ditemukan</p>
        <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection