@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-pink-600 text-center mb-8" style="font-family: 'Pacifico', cursive;">
        🎀 Daftar Pengguna 🎀
    </h2>

    {{-- Panggil komponen user-table --}}
    <x-user-table :users="$users" />

    {{-- Button Tambah User --}}
    <div class="mt-6 text-center">
        <a href="{{ route('user.create') }}" class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl font-bold shadow-md hover:bg-pink-600 transition-all">
            Tambah Pengguna Baru
        </a>
    </div>
</div>
@endsection
