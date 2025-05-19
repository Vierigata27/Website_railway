<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('utama.pengguna.index', compact('pengguna'));
    }

    public function create_user()
    {
        return view('frontend.pengguna.formpengguna');
    }
    
    
    public function store(Request $request)
    {
        // Validasi data pengguna
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'pekerjaan' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
        ]);

        // Simpan data pengguna ke database
        $pengguna = Pengguna::create([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'umur' => $request->umur,
        ]);

        // Simpan ID pengguna dalam cookie selama 7 hari
        Cookie::queue('id_pengguna', $pengguna->id_pengguna, 60);

        // Redirect ke halaman rakit komputer
        Alert::success('Selamat', 'Anda Telah Mengisi Form Pengguna');
        return redirect('/menu_utama');
    }
}
