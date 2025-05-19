<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komponen;
use App\Models\Kategori; 
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KomponenController extends Controller
{
    public function index()
    {
        $komponen = Komponen::all();
        return view('utama.komponen.index', compact('komponen'));
    }

    public function create()
    {
        $kategori = Kategori::all(); // Ambil kategori
        return view('utama.komponen.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_komponen' => 'required|string|max:255|unique:komponen_komputer,nama_komponen',
            'brand_komponen' => 'required|string|max:255',
            'id_kategori' => 'required',
            'soket_komponen' => 'nullable|string|max:255',
            'harga_komponen' => 'required|numeric|min:0',
            'performa_komponen' => 'required|string|max:255',
            'daya_komponen' => 'required|numeric|min:0',
        ],[
            'nama_komponen.unique' => 'Nama komponen sudah digunakan. Silakan gunakan nama lain.',
        ]);

        Komponen::create([
            'nama_komponen' => $request->nama_komponen,
            'brand_komponen' => $request->brand_komponen,
            'id_kategori' => $request->id_kategori,
            'soket_komponen' => $request->soket_komponen,
            'harga_komponen' => $request->harga_komponen,
            'performa_komponen' => $request->performa_komponen,
            'daya_komponen' => $request->daya_komponen,
        ]);

        return redirect()->route('komponen.index')->with('success', 'Komponen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $komponen = Komponen::findOrFail($id);
        $kategori = Kategori::all();
        return view('utama.komponen.edit', compact('komponen', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_komponen'    => 'required|string|max:255',
            'brand_komponen'   => 'required|string|max:255',
            'id_kategori'      => 'required',
            'soket_komponen'   => 'nullable|string|max:255',
            'harga_komponen'   => 'required|numeric|min:0',
            'performa_komponen'=> 'required|string|max:255',
            'daya_komponen'    => 'required|numeric|min:0',
        ]);

        $komponen = Komponen::findOrFail($id);
        $komponen->update([
            'nama_komponen'    => $request->nama_komponen,
            'brand_komponen'   => $request->brand_komponen,
            'id_kategori'=> $request->id_kategori,
            'soket_komponen'   => $request->soket_komponen,
            'harga_komponen'   => $request->harga_komponen,
            'performa_komponen'=> $request->performa_komponen,
            'daya_komponen'    => $request->daya_komponen,
        ]);

        return redirect()->route('komponen.index')->with('success', 'Komponen berhasil diupdate!');
    }

    public function destroy($id)
    {
        $komponen = Komponen::findOrFail($id);
        $komponen->delete();

        return redirect()->route('komponen.index')->with('success', 'Komponen berhasil dihapus!');
    }
}
