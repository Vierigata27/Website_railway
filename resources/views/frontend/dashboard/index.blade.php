@extends('frontend.layout.appfrontend')
@section('content')

<section id="hero" class="hero section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold display-4">Perkenalkan, Saya</h2>
                <h3 class="fw-bold text-success display-3">Vieri Arief Maulana</h3>
                <h4 class="text-secondary fs-4">Mahasiswa <span class="fw-bold">UPN Veteran Jawa Timur</span></h4>
                
                <p class="mt-4 lead">
                    Selamat datang di <span class="text-success fw-bold">Rakit Ku</span>,
                    platform yang membantu anda untuk melakukan <span class="fw-bold">simulasi perakitan komputer</span>
                    dan mencoba sistem rekomendasi berbasis <span class="fw-bold">algoritma genetika</span>.
                </p>
                
                <p class="fs-5">
                    Mulailah dengan memilih salah satu fitur di bawah ini:
                </p>
                
                <div class="d-flex flex-column align-items-center mt-4">
                    <a href="{{ route('form.rekomendasi') }}" class="btn btn-outline-success btn-lg px-5 py-3 shadow">🤖 Sistem Rekomendasi</a>
                    <h3 class="my-3">atau</h3>
                    <a href="{{ route('rakitkomputer.index') }}" class="btn btn-success btn-lg px-5 py-3 shadow">🔧 Rakit Komputer</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
