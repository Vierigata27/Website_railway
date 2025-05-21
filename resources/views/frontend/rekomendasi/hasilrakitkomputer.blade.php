@extends('frontend.layout.appfrontend')
@section('content')

<section id="hero" class="hero section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h2 class="fw-bold">Perkenalkan Saya</h2>
                <h3 class="fw-bold text-success">Vieri Arief Maulana</h3>
                <h4 class="text-secondary">Dari <span class="fw-bold">UPN VETERAN JAWA TIMUR</span></h4>

                <p class="mt-4">
                    Selamat datang di website <span class="text-success fw-bold">Rakit Ku</span>, tempat Anda bisa melakukan simulasi perakitan komputer dan mencoba sistem rekomendasi menggunakan <span class="fw-bold">algoritma genetika</span>.
                </p>

                <h2 class="fw-bold">Hasil Rekomendasi Rakit Komputer</h2>
                <h3>Nama Pengguna : {{ $rekomendasi->pengguna->nama }}</h3>
                <h3>Tanggal Rakit : {{ $rekomendasi->tanggal_rakit }}</h3>

                <!-- Form Generate Ulang -->
                <form id="rekomendasiForm" action="{{ route('rekomendasi.get') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_pengguna" value="{{ $id_pengguna }}" required>
                    <input type="hidden" name="kategori" value="rekomendasi rakit komputer" required>
                    <input type="hidden" id="budget_value" name="budget_value" value="{{ $budget }}" required>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">
                            Coba Generate Rekomendasi Lain
                        </button>
                    </div>
                    <br>
                </form>

                <!-- Tabel Komponen -->
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Komponen</th>
                            <th>Nama Komponen</th>
                            <th>Performa</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $komponen = ['cpu', 'motherboard', 'gpu', 'ram', 'storage', 'psu', 'casing', 'cooler']; @endphp
                        @foreach ($komponen as $index => $item)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ strtoupper($item) }}</td>
                            <td>{{ $rekomendasi->rakit->$item->nama_komponen }}</td>
                            <td>{{ $rekomendasi->rakit->$item->performa_komponen }}</td>
                            <td>Rp. {{ number_format(optional($rekomendasi->rakit->$item)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th colspan="3" class="fw-bold">Total Hasil</th>
                            <td>{{ optional($rekomendasi)->total_performa ?? '0' }}</td>
                            <td>Rp. {{ number_format(optional($rekomendasi)->total_buget ?? 0, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Kuesioner -->
                <h3>
                    Setelah Anda mencoba sistem rekomendasi atau melakukan simulasi rakit komputer, silakan isi formulir berikut: <br>
                    <a href="https://forms.gle/d5zzXY3APaqcE18P8" target="_blank">Kuesioner Pengujian Usability Sistem Rekomendasi Simulasi Rakit Komputer</a>
                </h3>

                <!-- Tombol Aksi -->
                {{-- <a href="{{ route('downloadrekomendasi.pdf', $rekomendasi->id_rekomendasi) }}" class="btn btn-danger">
                    <i class="fas fa-file-pdf"></i> Download PDF
                </a> --}}

                <a href="#" onclick="confirmLogout()" class="btn btn-dark">
                    <i class="fas fa-home"></i> Home
                </a>

                <!-- Konfirmasi Logout -->
                <script>
                    function confirmLogout() {
                        if (confirm('Peringatan : hasil rakit komputer tidak dapat diakses kembali. Apakah Anda yakin ingin kembali ke menu awal?')) {
                            window.location.href = '{{ url('/logout') }}';
                        }
                    }
                </script>

            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loading" class="loading-overlay" style="display: none;">
        <div class="spinner"></div>
    </div>
</section>

<!-- Style -->
<style>
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 5px solid rgba(0, 0, 0, 0.2);
        border-top-color: #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<!-- Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Sembunyikan loading saat halaman selesai dimuat
        document.getElementById("loading").style.display = "none";

        // Tampilkan loading saat form dikirim
        document.getElementById("rekomendasiForm").addEventListener("submit", function () {
            document.getElementById("loading").style.display = "flex";
        });
    });
</script>

@endsection
