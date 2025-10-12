<div class="overflow-x-auto bg-white rounded-xl shadow-lg">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-pink-500 text-white">
                <th class="px-6 py-3 text-center">ID</th>
                <th class="px-6 py-3 text-center">Nama</th>
                <th class="px-6 py-3 text-center">NPM</th>
                <th class="px-6 py-3 text-center">Kelas</th>
                <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="hover:bg-pink-50 transition">
                    <td class="px-6 py-3 border-b text-center">{{ $user->id }}</td>
                    <td class="px-6 py-3 border-b text-center font-medium">{{ $user->nama }}</td>
                    <td class="px-6 py-3 border-b text-center">{{ $user->nim }}</td>
                    <td class="px-6 py-3 border-b text-center">{{ $user->nama_kelas }}</td>
                    <td class="px-6 py-3 border-b text-center">
                        <a href="{{ route('user.edit', $user->id) }}"
                           class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-4 py-1 rounded-lg shadow transition duration-200 mr-2">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Yakin ingin menghapus pengguna ini?')"
                                class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-1 rounded-lg shadow transition duration-200">
                                🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-gray-500 py-6">
                        Belum ada data pengguna
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
