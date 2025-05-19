<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komponen;
use App\Models\Kategori;
use App\Models\Rakit;
use App\Models\Rekomendasi;
use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // Hitung total data
        $totalpengguna = Pengguna::count();
        $totalkomponen = Komponen::count();
        $totalrakit = Rakit::count();
        $total_simulasi = Rekomendasi::where('kategori', 'simulasi rakit komputer')->count();
        $total_rekomendasi = Rekomendasi::where('kategori', 'rekomendasi rakit komputer')->count();

        // Ambil tanggal 7 hari terakhir (termasuk hari ini)
        $startDate = Carbon::now()->subDays(6)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        // Buat array default tanggal dengan nilai 0
        $dates = [];
        $current = $startDate->copy();
        while ($current <= $endDate) {
            $dates[$current->format('Y-m-d')] = 0;
            $current->addDay();
        }

        // Ambil data rekomendasi dari database
        $dataRekomendasi = Rekomendasi::select(
            DB::raw("DATE(tanggal_rakit) as tanggal"),
            DB::raw("COUNT(*) as total")
        )
        ->whereBetween('tanggal_rakit', [$startDate, $endDate])
        ->where('kategori', 'rekomendasi rakit komputer')
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'ASC')
        ->pluck('total', 'tanggal')
        ->toArray();

        // Gabungkan dengan array tanggal default
        foreach ($dataRekomendasi as $tanggal => $total) {
            $dates[$tanggal] = $total;
        }

        // Ambil data simulasi dari database
        $dataSimulasi = Rekomendasi::select(
            DB::raw("DATE(tanggal_rakit) as tanggal"),
            DB::raw("COUNT(*) as total")
        )
        ->whereBetween('tanggal_rakit', [$startDate, $endDate])
        ->where('kategori', 'simulasi rakit komputer')
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'ASC')
        ->pluck('total', 'tanggal')
        ->toArray();

        // Siapkan data untuk chart
        $labels = [];
        $values_rekomendasi = [];
        $values_simulasi = [];

        foreach ($dates as $tanggal => $totalRekomendasi) {
            $labels[] = $tanggal;
            $values_rekomendasi[] = $totalRekomendasi;
            $values_simulasi[] = $dataSimulasi[$tanggal] ?? 0;
        }

        // Kirim data ke view
        return view('utama.dashboard.index', compact(
            'totalpengguna',
            'totalkomponen',
            'totalrakit',
            'total_simulasi',
            'total_rekomendasi',
            'labels',
            'values_rekomendasi',
            'values_simulasi'
        ));
    }
}
