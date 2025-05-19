@extends('frontend.layout.appfrontend')

@section('content')

<section id="hero" class="hero section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold">Perkenalkan Saya</h2>
                <h3 class="fw-bold text-success">Vieri Arief Maulana</h3>
                <h4 class="text-secondary">Dari <span class="fw-bold">UPN VETERAN JAWA TIMUR</span></h4>
                <p class="mt-4">Selamat datang di website <span class="text-success fw-bold">Rakit Ku</span>, tempat Anda bisa melakukan simulasi perakitan komputer dan mencoba sistem rekomendasi menggunakan <span class="fw-bold">algoritma genetika</span>.</p>
                <p>Silahkan isi komponen komputer yang ingin Anda rakit, lalu tekan tombol <span class="text-success fw-bold">Rakit</span> untuk melihat hasilnya.</p>
                
                <br>
                <h2 class="fw-bold text-light">Form Input Simulasi Rakit Komputer</h2>
                <div class="card bg-dark text-light p-4 mt-3 shadow-lg">
                    <form action="" method="post" id="rakitForm" enctype="multipart/form-data">
                        @csrf

                        @foreach ($kategori as $kategoriItem)
                        <div class="mb-3">
                            <label for="komponen_{{ $kategoriItem->id_kategori }}" class="form-label">{{ $kategoriItem->nama_kategori }}:</label>
                            <select id="komponen_{{ $kategoriItem->id_kategori }}" name="komponen[]" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih {{ $kategoriItem->nama_kategori }}</option>
                                @foreach ($komponen->where('id_kategori', $kategoriItem->id_kategori) as $k)
                                    <option value="{{ $k->id_komponen }}" data-harga="{{ $k->harga_komponen }}">
                                        {{ $k->nama_komponen }} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}
                                    </option>
                                @endforeach
                            </select>
                            
                        </div>
                        @endforeach

                        <div class="mt-3">
                            <h4 class="fw-bold">Total Harga: <span id="totalHarga">Rp.0</span></h4>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">Rakit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const selects = document.querySelectorAll(".komponen");
        const totalHargaElem = document.getElementById("totalHarga");

        function updateTotalHarga() {
            let total = 0;
            selects.forEach(select => {
                let selectedOption = select.options[select.selectedIndex];
                total += parseInt(selectedOption.getAttribute("data-harga") || 0);
            });
            totalHargaElem.textContent = "Rp." + new Intl.NumberFormat('id-ID').format(total);
        }

        selects.forEach(select => {
            select.addEventListener("change", updateTotalHarga);
        });
    });
</script>

@endsection
