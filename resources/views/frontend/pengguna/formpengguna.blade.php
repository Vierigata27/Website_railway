@extends('frontend.layout.appfrontend')
@section('content')

<!-- Modal Notifikasi -->
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger fw-bold" id="notifModalLabel">Pemberitahuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                @if(session('error'))
                    <p>{{ session('error') }}</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Menampilkan Modal Otomatis -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('error'))
            var notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
            notifModal.show();
        @endif
    });
</script>


<section id="hero" class="hero section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold">Perkenalkan Saya</h2>
                <h3 class="fw-bold text-success">Vieri Arief Maulana</h3>
                <h4 class="text-secondary">Dari <span class="fw-bold">UPN VETERAN JAWA TIMUR</span></h4>
                <p class="mt-4">
                    Selamat datang di website <span class="text-success fw-bold">Rakit Ku</span>,
                    tempat untuk Anda bisa melakukan simulasi perakitan komputer dan mencoba sistem rekomendasi menggunakan 
                    <span class="fw-bold">algoritma genetika</span>.
                </p>
                <p>Silahkan isi data diri Anda, lalu tekan tombol <span class="text-success fw-bold">Lanjutkan</span> untuk mulai merakit komputer.</p>
                
                <br>
                
                <h2 class="fw-bold text-light">Form Input Data Pengguna</h2>
                <div class="card bg-dark text-light p-4 mt-3 shadow-lg">
                    
                    <form action="{{ route('formpengguna.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="asal" class="form-label">Asal:</label>
                            <input type="text" id="asal" name="asal" class="form-control @error('asal') is-invalid @enderror" required>
                            @error('asal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" required>
                            @error('pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur:</label>
                            <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror" required>
                            @error('umur')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
