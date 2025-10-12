@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-pink-600 text-center mb-8" style="font-family: 'Pacifico', cursive;">
        🎀 Daftar Pengguna 🎀
    </h2>

    @if(session('success'))
    <div id="alertSuccess" 
         class="bg-pink-100 border border-pink-300 text-pink-700 px-6 py-4 rounded-xl mb-6 text-center shadow-md transition-all duration-500">
        <strong>✨ {{ session('success') }} ✨</strong>
    </div>
    @endif

    <x-user-table :users="$users" />

    <div class="mt-6 text-center">
        <a href="{{ route('user.create') }}" 
           class="inline-block bg-pink-500 text-white px-6 py-3 rounded-xl font-bold shadow-md hover:bg-pink-600 transition-all">
            Tambah Pengguna Baru
        </a>
    </div>
</div>

<script>
    setTimeout(() => {
        const alert = document.getElementById('alertSuccess');
        if (alert) {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>
@endsection
