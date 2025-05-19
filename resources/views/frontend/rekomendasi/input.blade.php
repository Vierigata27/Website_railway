@extends('frontend.layout.appfrontend')

@section('content')
<!-- Loading Screen -->
<div id="loading" class="loading-overlay">
    <div class="spinner"></div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="text-center">
            <h2 class="fw-bold display-4">Halo, Saya</h2>
            <h3 class="fw-bold text-success display-3">Vieri Arief Maulana</h3>
            <h4 class="text-secondary fs-4">Mahasiswa <span class="fw-bold">UPN Veteran Jawa Timur</span></h4>
        </div>
        
        <p class="mt-4 lead text-center">
            Selamat datang di <span class="text-success fw-bold">Sistem Rekomendasi Rakit Ku</span>,
            Berikut adalah sistem rekomendasi 
            <br>untuk merakit sebuah komputer menggunakan <span class="fw-bold">Algoritma Genetika</span>
            <br>untuk input anggaran mulai dari Rp 5.000.000 hingga Rp 15.000.000.
        </p>
        
        <div class="col-md-6">
            <div class="card p-4">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Cari Rekomendasi Rakitan PC</h4>
                </div>
                
                @if ($errors->any())
                    <div class="alert alert-danger text-center mt-3">
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif
                
                <div class="card-body">
                    <form id="rekomendasiForm" action="{{ route('rekomendasi.get') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id_pengguna" name="id_pengguna" class="form-control" value="{{ $id_pengguna }}" required>
                        <input type="hidden" id="kategori" name="kategori" class="form-control" value="rekomendasi rakit komputer" required>
                        <div class="form-group">
                            <label for="budget">Masukkan Budget:</label>
                            <input type="text" id="budget" class="form-control" placeholder="Masukkan budget Anda" required>
                            <input type="hidden" id="budget_value" name="budget_value">
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">Cari Rekomendasi</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<style>
/* Loading overlay */
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Sembunyikan loading setelah halaman selesai dimuat
    document.getElementById("loading").style.display = "none";

    let budgetInput = document.getElementById("budget");
    let budgetValueInput = document.getElementById("budget_value");
    
    budgetInput.addEventListener("input", function() {
        let rawValue = this.value.replace(/[^0-9]/g, ""); // Hanya angka
        let formattedValue = formatRupiah(rawValue);

        this.value = formattedValue;
        budgetValueInput.value = rawValue; // Simpan angka murni
    });

    function formatRupiah(angka) {
        if (!angka) return ""; // Jika kosong, tidak mengembalikan angka
        return new Intl.NumberFormat("id-ID").format(angka); // Format sesuai standar Indonesia
    }

    // Tampilkan loading saat form dikirim
    document.getElementById("rekomendasiForm").addEventListener("submit", function() {
        document.getElementById("loading").style.display = "flex";
    });
});
</script>

@endsection
