<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komponen;
use App\Models\Kategori;
use App\Models\Rakit;
use App\Models\Rekomendasi;
use App\Models\Pengguna;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

use Dompdf\Dompdf;
use Dompdf\Options;

class RekomendasiRakitanController extends Controller
{
    public function index() //admin
    {
        $rekomendasi = Rekomendasi::all();
        return view('utama.sistem_rekomendasi.index', compact('rekomendasi'));
    }

    public function detail ($id) //admin
    {
         // Ambil rekomendasi dengan informasi rakitan yang sesuai dengan pengguna
        $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)->firstOrFail();

        return view('utama.sistem_rekomendasi.detail', compact('rekomendasi'));
    }

    public function cetakhasilrekomendasirakit($id) //admin
    {
            $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)->firstOrFail();
    
            if (!$rekomendasi) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }

           // Buat opsi untuk domPDF
           $options = new Options();
           $options->set('defaultFont', 'Helvetica');
   
           // Buat PDF instance
           $dompdf = new Dompdf($options);
   
           // Load view untuk PDF
           $html = view('utama.sistem_rekomendasi.downloadhasilrekomendasiomputer', compact('rekomendasi'))->render();
           $dompdf->loadHtml($html);
   
           // Set ukuran kertas dan orientasi
           $dompdf->setPaper('A4', 'portrait');
   
           // Render PDF
           $dompdf->render();
   
           // Download PDF
           return $dompdf->stream('Hasil_Rakit_Komputer_Pengguna 1.pdf', ["Attachment" => false]);
    }

    public function createrekomendasi ()
    {
        // Ambil ID pengguna dari cookie
        $id_pengguna = Cookie::get('id_pengguna');

        if (!$id_pengguna) {
            return redirect()->route('formpengguna.index')->with('error', 'Silakan isi data diri terlebih dahulu!');
        }

        return view('frontend.rekomendasi.input',compact('id_pengguna'));
    }

    private function validasiKomponen($rakitan)
    {
        foreach ($rakitan as $key => $komponen) {
            if (!isset($komponen['nama_komponen'])) {
                return false;
            }

            $nama = $komponen['nama_komponen'];

            $match = Komponen::where('nama_komponen', $nama)->first();

            if (!$match) {
                \Log::warning("Komponen tidak ditemukan: $nama dari kategori $key");
                return false;
            }
        }

        return true;
    }

    public function algoritma_genetika1(Request $request)
{
    $request->validate([
        'budget_value' => 'required|numeric|min:5000000|max:15000000',
    ]);

    $budget = $request->input('budget_value');
    $flaskUrl = "https://algoritmagenetika-production.up.railway.app/rekomendasi";

    try {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($flaskUrl, ['budget' => $budget]);

        if ($response->failed()) {
            return back()->withErrors(['msg' => 'Gagal menghubungi server rekomendasi.']);
        }

        $data = $response->json();

        if (!isset($data['rakitan_terbaik'])) {
            return back()->withErrors(['msg' => 'Respons dari server tidak valid: rakitan_terbaik tidak ditemukan.']);
        }

        $rakitan = $data['rakitan_terbaik'];

        // Validasi nama komponen terhadap database
        foreach ($rakitan as $kategori => $komponen) {
            $nama = $komponen['nama_komponen'] ?? null;

            if (!$nama) {
                return back()->withErrors(['msg' => "Komponen '$kategori' tidak memiliki nama."]);
            }

            $cari = Komponen::where('nama_komponen', $nama)->first();

            if (!$cari) {
                return back()->withErrors([
                    'msg' => "Komponen '$nama' dari API tidak ditemukan dalam database. Harap pastikan data sinkron."
                ]);
            }

            // Gantikan ID dari database agar valid saat disimpan
            $rakitan[$kategori]['id_komponen'] = $cari->id_komponen;
        }

        // Proses simpan
        $total_performa = ($rakitan['CPU']['performa_asli'] ?? 0) + ($rakitan['GPU']['performa_asli'] ?? 0);
        $total_harga = collect($rakitan)->sum(fn($item) => $item['harga_komponen'] ?? 0);

        $rakit = Rakit::create([
            'id_komponen_cpu' => $rakitan['CPU']['id_komponen'],
            'id_komponen_motherboard' => $rakitan['Motherboard']['id_komponen'],
            'id_komponen_gpu' => $rakitan['GPU']['id_komponen'],
            'id_komponen_ram' => $rakitan['RAM']['id_komponen'],
            'id_komponen_storage' => $rakitan['Storage']['id_komponen'],
            'id_komponen_psu' => $rakitan['Power Supply']['id_komponen'],
            'id_komponen_casing' => $rakitan['Casing']['id_komponen'],
            'id_komponen_cooler' => $rakitan['Fan CPU']['id_komponen'],
        ]);

        $rekomendasi = Rekomendasi::create([
            'id_pengguna' => $request->id_pengguna,
            'id_rakit' => $rakit->id_rakit,
            'total_performa' => $total_performa,
            'total_buget' => $total_harga,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('hasilrekomendasi.show', [
            'id' => $rekomendasi->id_rekomendasi,
            'budget' => $budget
        ]);
    } catch (\Exception $e) {
        return back()->withErrors(['msg' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
}


    public function algoritma_genetika(Request $request)
    {
        // Validasi input
        $request->validate([
            'budget_value' => 'required|numeric|min:5000000|max:15000000', // Budget harus antara 5 juta - 15 juta
        ]);
    
        $budget = $request->input('budget_value'); // Ambil budget dari hidden input
        
        // Ambil semua data komponen dan relasi ke kategori
        $komponen = Komponen::with('kategori')->get()->map(function ($item) {
            return [
                'id_komponen'        => $item->id_komponen,
                'nama_komponen'      => $item->nama_komponen,
                'brand_komponen'      => $item->brand_komponen,
                'id_kategori'        => $item->id_kategori,
                'nama_kategori'      => $item->kategori->nama_kategori ?? '',
                'soket_komponen'     => $item->soket_komponen,
                'harga_komponen'     => (int) $item->harga_komponen,
                'performa_komponen'  => (int) $item->performa_komponen,
                'daya_komponen'      => (int) $item->daya_komponen,
            ];
        })->values()->toArray(); 

        // Endpoint Flask API
        $flaskUrl = "https://rekomendasi-rakit-komputer.up.railway.app/rekomendasi"; 
        // $flaskUrl = "http://127.0.0.1:5000/rekomendasi"; 
        
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($flaskUrl, [
                'budget' => $budget,
                'komponen' => $komponen
            ]);
    
            if ($response->failed()) {
                return Redirect::route('form.rekomendasi')->withErrors(['msg' => 'Terjadi kesalahan saat menghubungi API.']);
            }
    
            $data = $response->json();
    
            if (!isset($data['rakitan_terbaik']) || empty($data['rakitan_terbaik'])) {
                return Redirect::route('form.rekomendasi')->withErrors(['msg' => 'Gagal mendapatkan rekomendasi. Silakan coba lagi!']);
            }

            // Pastikan semua komponen tersedia sebelum diakses
            $fitness_score = $data['fitness_score'] ?? null;
            $rakitan = $data['rakitan_terbaik'];

            $performa_cpu = $rakitan['CPU']['performa_asli']?? 0;
            $performa_gpu = $rakitan['GPU']['performa_asli']?? 0;

            $total_performa = $performa_cpu +  $performa_gpu;

            $harga_cpu = $rakitan['CPU']['harga_komponen']?? 0;
            $harga_motherboard = $rakitan['Motherboard']['harga_komponen'] ?? 0;
            $harga_gpu = $rakitan['GPU']['harga_komponen'] ?? 0;
            $harga_ram = $rakitan['RAM']['harga_komponen'] ?? 0;
            $harga_storage = $rakitan['Storage']['harga_komponen'] ?? 0;
            $harga_power_supply = $rakitan['Power Supply']['harga_komponen'] ?? 0;
            $harga_fan_cpu = $rakitan['Fan CPU']['harga_komponen'] ?? 0;
            $harga_casing = $rakitan['Casing']['harga_komponen'] ?? 0;

            $total_harga =  $harga_cpu + $harga_motherboard + $harga_gpu + $harga_ram + $harga_storage + $harga_power_supply + $harga_fan_cpu + $harga_casing;

            $CPU = $rakitan['CPU']['id_komponen'] ?? null;
            $Motherboard = $rakitan['Motherboard']['id_komponen'] ?? null;
            $GPU = $rakitan['GPU']['id_komponen'] ?? null;
            $RAM = $rakitan['RAM']['id_komponen'] ?? null;
            $Storage = $rakitan['Storage']['id_komponen'] ?? null;
            $Power_Supply = $rakitan['Power Supply']['id_komponen'] ?? null;
            $Fan_CPU = $rakitan['Fan CPU']['id_komponen'] ?? null;
            $Casing = $rakitan['Casing']['id_komponen'] ?? null;

            $rakit = Rakit::create([
                'id_komponen_cpu' => $CPU,
                'id_komponen_motherboard' =>  $Motherboard,
                'id_komponen_gpu' => $GPU,
                'id_komponen_ram' => $RAM,
                'id_komponen_storage' => $Storage,
                'id_komponen_psu' => $Power_Supply,
                'id_komponen_casing' => $Casing,
                'id_komponen_cooler' => $Fan_CPU,
            ]);

            $rekomendasi = Rekomendasi::create([
                'id_pengguna' => $request->id_pengguna,
                'id_rakit' => $rakit->id_rakit,
                'total_performa' => $total_performa,
                'total_buget' => $total_harga,
                'kategori' => $request->kategori,
            ]);

            Alert::success('Selamat', 'Berhasil Merakit Sebuah Komputer!');
            return redirect()->route('hasilrekomendasi.show', ['id' => $rekomendasi->id_rekomendasi, 'budget' => $budget]);

        } catch (\Exception $e) {
            return Redirect::route('form.rekomendasi')->withErrors(['msg' => 'Gagal terhubung ke server rekomendasi: ' . $e->getMessage()]);
        }
    }

    public function hasilrekomendasi($id, Request $request)
    {
        // Ambil ID pengguna dari cookie
        $id_pengguna = Cookie::get('id_pengguna');

        // Ambil rekomendasi berdasarkan ID dan pastikan milik pengguna
        $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)
                                ->where('id_pengguna', $id_pengguna)
                                ->first();

        // Jika rekomendasi tidak ditemukan atau bukan milik pengguna, redirect dengan error
        if (!$rekomendasi) {
            return redirect('/rakit_komputer')->with('error', 'Anda tidak memiliki akses ke rakitan ini!');
        }

        // Ambil nilai budget dari query string
        $budget = $request->query('budget');

        // Kirim data ke view
        return view('frontend.rekomendasi.hasilrakitkomputer', compact('rekomendasi', 'id_pengguna', 'budget'));
    }

    public function cetakhasilrekomendasi($id)
    {
        $rekomendasi = Rekomendasi::where('id_rekomendasi', $id)->first();

        if (!$rekomendasi) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Konfigurasi opsi untuk domPDF
        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true); // Jika ada gambar eksternal

        // Buat instance domPDF
        $dompdf = new Dompdf($options);

        // Load tampilan view ke dalam HTML
        $html = view('frontend.rekomendasi.downloadhasilrekomendasirakitkomputer', compact('rekomendasi'))->render();
        $dompdf->loadHtml($html);

        // Set ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Menampilkan PDF di browser
        return response($dompdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="Hasil_Rekomendasi_Rakit_Komputer.pdf"');
    }
    
}
