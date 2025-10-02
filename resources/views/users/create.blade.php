@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-full max-w-md">
        <h2 class="text-3xl font-bold text-pink-600 text-center mb-8">✨ Tambah Pengguna ✨</h2>

        <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center" />
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">NPM</label>
                <input type="text" name="nim" placeholder="Masukkan NPM" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center" />
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Kelas</label>
                <input type="text" name="nama_kelas" placeholder="Masukkan kelas" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center" />
            </div>

            <button type="submit"
                class="w-full bg-pink-500 text-white py-3 rounded-xl font-bold hover:bg-pink-600 transition-all shadow-md">
                Tambah Pengguna
            </button>
        </form>
    </div>
</div>
@endsection
