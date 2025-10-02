@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-full max-w-md">
        {{-- Heading Lettering + Gradient --}}
        <h2 class="text-2xl text-center mb-8 font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600" style="font-family: 'Pacifico', cursive;">
            ✨ Tambah Pengguna Baru ✨
        </h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nama" class="block text-gray-700 font-medium mb-2 text-center">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center" />
            </div>

            <div>
                <label for="npm" class="block text-gray-700 font-medium mb-2 text-center">NPM</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center" />
            </div>

            <div>
                <label for="kelas_id" class="block text-gray-700 font-medium mb-2 text-center">Kelas</label>
                <select name="kelas_id" id="kelas_id" required
                    class="w-full px-4 py-3 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none text-center">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Button Shimmer --}}
            <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-xl font-bold shimmer hover:bg-pink-600 transition-all shadow-md">
                Tambah Pengguna
            </button>
        </form>
    </div>
</div>
@endsection
