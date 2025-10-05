<div class="overflow-x-auto bg-white rounded-xl shadow-lg">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-pink-500 text-white">
                <th class="px-6 py-3 text-center">ID</th>
                <th class="px-6 py-3 text-center">Nama</th>
                <th class="px-6 py-3 text-center">NPM</th>
                <th class="px-6 py-3 text-center">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="hover:bg-pink-50 transition">
                    <td class="px-6 py-3 border-b text-center">{{ $user->id }}</td>
                    <td class="px-6 py-3 border-b text-center font-medium">{{ $user->nama }}</td>
                    <td class="px-6 py-3 border-b text-center">{{ $user->nim }}</td>
                    <td class="px-6 py-3 border-b text-center">{{ $user->nama_kelas }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-gray-500 py-6">
                        Belum ada data pengguna
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
