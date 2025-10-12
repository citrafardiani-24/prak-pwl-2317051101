<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function kelasC($nama = "", $npm = "", $kelas = "")
    {
        // Cek apakah ada foto sesuai nama
        $fotoPath = public_path("images/{$nama}.jpg");
        $foto = file_exists($fotoPath) ? "images/{$nama}.jpg" : "images/foto2.jpeg";

        $data = [
            'nama' => $nama,
            'npm'  => $npm,
            'kelas'=> $kelas,
            'foto' => $foto
        ];

        return view('kelasC', $data);
    }

    public function profile($nama = "", $npm = "", $kelas = "")
    {
        $fotoPath = public_path("images/{$nama}.jpg");
        $foto = file_exists($fotoPath) ? "images/{$nama}.jpg" : "images/fotomaw.jpg";

        $data = [
            'nama' => $nama,
            'npm'  => $npm,
            'kelas'=> $kelas,
            'foto' => $foto
        ];

        return view('profile', $data);
    }
}
