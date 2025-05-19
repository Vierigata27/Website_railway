<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komponen;
use App\Models\Kategori;
use App\Models\Rakit;
use App\Models\Rekomendasi;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

use Dompdf\Dompdf;
use Dompdf\Options;

class RakitController extends Controller
{
    public function index()
    {
        // Ambil ID pengguna dari cookie
        $id_pengguna = Cookie::get('id_pengguna');

        if (!$id_pengguna) {
            return redirect()->route('formpengguna.index')->with('error', 'Silakan isi data diri terlebih dahulu!');
        }

        // Ambil data komponen dan kategori
        $komponen = Komponen::all();
        $kategori = Kategori::all();

        return view('frontend.rakit.rakitkomputer', compact('komponen', 'kategori', 'id_pengguna'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_komponen_cpu' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_motherboard' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_gpu' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_ram' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_storage' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_psu' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_casing' => 'required|exists:komponen_komputer,id_komponen',
            'id_komponen_cooler' => 'required|exists:komponen_komputer,id_komponen',
        ], 
        [
            'required' => ':attribute wajib dipilih!',
            'exists' => ':attribute yang dipilih tidak ditemukan!',
        ]);


        // Ambil data CPU dan motherboard untuk pengecekan kompatibilitas serta menghitung total harga dan performa
        $cpu = Komponen::find($request->id_komponen_cpu);
        $motherboard = Komponen::find($request->id_komponen_motherboard);
        $gpu = Komponen::find($request->id_komponen_gpu);
        $ram = Komponen::find($request->id_komponen_ram);
        $storage = Komponen::find($request->id_komponen_storage);
        $psu = Komponen::find($request->id_komponen_psu);
        $casing = Komponen::find($request->id_komponen_casing);
        $cooler = Komponen::find($request->id_komponen_cooler);

        $total_daya = ($cpu->daya_komponen + $gpu->daya_komponen) * 1.25;
        
        // Cek kompatibilitas antara CPU dan motherboard berdasarkan soket
        if ($cpu->soket_komponen !== $motherboard->soket_komponen) {
            Alert::error('Error', 'Komponen Tidak Kompetibel, tolong pilih komponen yang sesuai dengan CPU ' . $cpu->brand_komponen)->persistent('Tutup');
            return redirect()->back();
        }
        
        if ($psu->daya_komponen < $total_daya) {
            Alert::error('Error', 'Daya PSU tidak mencukupi, tolong pilih PSU dengan daya lebih dari ' . $total_daya . ' Watt')->persistent('Tutup');
            return redirect()->back();
        }

        //untuk menghitung total performa rakitan komputer dan total buget komputer
        $total_performa = $cpu->performa_komponen + $gpu->performa_komponen;
        $total_buget = $cpu->harga_komponen + $motherboard->harga_komponen + $gpu->harga_komponen + $ram->harga_komponen + $storage->harga_komponen + $psu->harga_komponen + $casing->harga_komponen + $cooler->harga_komponen;
        

        // Simpan data rakitan komputer menggunakan Eloquent
        $rakit = Rakit::create([
            'id_komponen_cpu' => $request->id_komponen_cpu,
            'id_komponen_motherboard' => $request->id_komponen_motherboard,
            'id_komponen_gpu' => $request->id_komponen_gpu,
            'id_komponen_ram' => $request->id_komponen_ram,
            'id_komponen_storage' => $request->id_komponen_storage,
            'id_komponen_psu' => $request->id_komponen_psu,
            'id_komponen_casing' => $request->id_komponen_casing,
            'id_komponen_cooler' => $request->id_komponen_cooler,
        ]);

        $rekomendasi = Rekomendasi::create([
            'id_pengguna' => $request->id_pengguna,
            'id_rakit' => $rakit->id_rakit,
            'total_performa' => $total_performa,
            'total_buget' => $total_buget,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('hasilrakit.show', ['id' => $rekomendasi->id_rekomendasi])
       ->with('success', 'Berhasil Merakit Sebuah Komputer!');
    }


        public function show($id)
    {
        // Ambil ID pengguna dari cookie
        $id_pengguna = Cookie::get('id_pengguna');

        // Ambil rekomendasi dengan informasi rakitan yang sesuai dengan pengguna
        $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)
                                ->where('id_pengguna', $id_pengguna)
                                ->with('rakit') // Pastikan relasi rakit dimuat
                                ->first();

        // Jika rekomendasi tidak ditemukan atau bukan milik pengguna, redirect dengan error
        if (!$rekomendasi) {
            echo "<script>alert('Anda tidak memiliki akses ke rakitan ini!'); window.location.href='/rakit_komputer';</script>";
            exit;
        }

        return view('frontend.rakit.hasilrakitkomputer', compact('rekomendasi'));
    }

        public function cetakhasilrakit($id)
        {
            $id_pengguna = Cookie::get('id_pengguna');

            $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)
                                ->where('id_pengguna', $id_pengguna)
                                ->with('rakit') // Pastikan relasi rakit dimuat
                                ->first();
    
            if (!$rekomendasi) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }
    
            // Buat opsi untuk domPDF
            $options = new Options();
            $options->set('defaultFont', 'Helvetica');
    
            // Buat PDF instance
            $dompdf = new Dompdf($options);
    
            // Load view untuk PDF
            $html = view('frontend.rakit.downloadhasilrakitkomputer', compact('rekomendasi'))->render();
            $dompdf->loadHtml($html);
    
            // Set ukuran kertas dan orientasi
            $dompdf->setPaper('A4', 'portrait');
    
            // Render PDF
            $dompdf->render();
    
            // Download PDF
            return $dompdf->stream('Hasil_Rakit_Komputer.pdf', ["Attachment" => false]);
        }

}
