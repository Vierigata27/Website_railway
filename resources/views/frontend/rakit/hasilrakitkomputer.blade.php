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
                {{-- <p>Silahkan isi komponen komputer yang ingin anda rakit, lalu tekan tombol <span class="text-success fw-bold">rakit</span> untuk melihat hasil merakit komputer.</p>
                <br> --}}
                <h2 class="fw-bold">Hasil Simulasi Rakit Komputer </h2>
                <h3>Nama Pengguna : {{ $rekomendasi->pengguna->nama}} </h3>
                <h3>Tanggal Rakit : {{ $rekomendasi->tanggal_rakit}} </h3>
                <br>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Komponen</th>
                        <th scope="col">Nama Komponen</th>
                        <th scope="col">Performa</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>CPU</td>
                        <td>{{ $rekomendasi->rakit->cpu->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->cpu->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->cpu)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">2</th>
                        <td>Motherboard</td>
                        <td>{{ $rekomendasi->rakit->motherboard->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->motherboard->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->motherboard)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>GPU</td>
                        <td>{{ $rekomendasi->rakit->gpu->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->gpu->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->gpu)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">4</th>
                        <td>RAM</td>
                        <td>{{ $rekomendasi->rakit->ram->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->ram->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->ram)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>Storage</td>
                        <td>{{ $rekomendasi->rakit->storage->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->storage->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->storage)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">6</th>
                        <td>PSU</td>
                        <td>{{ $rekomendasi->rakit->psu->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->psu->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->psu)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">7</th>
                        <td>Casing</td>
                        <td>{{ $rekomendasi->rakit->casing->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->casing->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->casing)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>

                      <tr>
                        <th scope="row">8</th>
                        <td>Cooler</td>
                        <td>{{ $rekomendasi->rakit->cooler->nama_komponen}}</td>
                        <td>{{ $rekomendasi->rakit->cooler->performa_komponen}}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi->rakit->cooler)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                      </tr>
                      <tr >
                        <th colspan="3" class="fw-bold">Total Hasil</th>
                        <td >{{ optional($rekomendasi)->total_performa ?? '0' }}</td>
                        <td>Rp. {{ number_format(optional($rekomendasi)->total_buget ?? 0, 0, ',', '.') }}</td>
                    </tr>
                    </tbody>
                  </table>
                  <h3>Setelah Anda mencoba sistem rekomendasi atau melakukan simulasi rakit komputer, silakan isi formulir berikut : <br><a href="https://forms.gle/d5zzXY3APaqcE18P8" target="_blank">Kuesioner Pengujian Usability Sistem Rekomendasi Simulasi Rakit Komputer</a></h3>
                  <a href="{{ route('download.pdf', $rekomendasi->id_rekomendasi) }}" class="btn btn-danger">
                    <i class="fas fa-file-pdf"></i> Download PDF
                  </a>

                  <a href="#" onclick="confirmLogout()" class="btn btn-dark">
                    <i class="fas fa-home"></i> Home
                </a>
                
                <script>
                function confirmLogout() {
                    if (confirm('Peringatan : hasil rakit komputer tidak dapat diakses kembali. Apakah Anda yakin ingin kembail ke menu awal ?')) {
                        window.location.href = '{{ url('/logout') }}';
                    }
                }
                </script>
                  
                </div>
            </div>
        </div>
    </div>
</section>

  @endsection