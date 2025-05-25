@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-3xl font-bold text-red-700 mb-4">Oops!</h1>
        <p class="text-gray-600 mb-8">{{ $message ?? 'Terjadi kesalahan. Silakan coba lagi nanti.' }}</p>
        <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection