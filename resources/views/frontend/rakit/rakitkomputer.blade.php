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
                <p>Silahkan isi komponen komputer yang ingin anda rakit, lalu tekan tombol <span class="text-success fw-bold">rakit</span> untuk melihat hasil merakit komputer.</p>
                {{-- <br>
                <h2 class="fw-bold">Selamat Datang</h2>
                <br> --}}

                <br>
                <div class="card bg-dark text-light p-4 mt-3 shadow-lg">
                    <form action="{{ route('rakitkomputer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" id="id_pengguna" name="id_pengguna" class="form-control" value="{{ $id_pengguna }}" required>
                        <input type="hidden" id="kategori" name="kategori" class="form-control" value="simulasi rakit komputer" required>
                        
                        <div class="mb-1">
                            <label for="komponen_cpu" class="form-label">CPU (Prosesor):</label>
                            <select id="komponen_cpu" name="id_komponen_cpu" class="form-select komponen" required>
                                <option value="" data-harga="0" >---------- Pilih Komponen CPU AMD ----------</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '1' && $k->soket_komponen ==  'AM4')
                                    <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}">
                                        {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}
                                    </option>
                                    @endif
                                @endforeach
                                <option value="" data-harga="0" >---------- Pilih Komponen CPU Intel ----------</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '1' && $k->soket_komponen ==  'LGA1700')
                                    <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}">
                                        {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('cpu_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="mb-1">
                            <label for="komponen_motherboard" class="form-label">Motherboard:</label>
                            <select id="komponen_motherboard" name="id_komponen_motherboard" class="form-select komponen" required>
                                <option value="" data-harga="0">---------- Pilih Komponen Motherboard AMD ----------</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '2' && $k->soket_komponen ==  'AM4')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}">
                                             {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}
                                        </option>
                                    @endif
                                @endforeach
                                <option value="" data-harga="0">---------- Pilih Komponen Motherboard Intel ----------</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '2' && $k->soket_komponen ==  'LGA1700')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}">
                                             {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('motherboard_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="mb-1">
                            <label for="komponen_GPU" class="form-label">GPU : </label>
                            <select id="komponen_GPU" name="id_komponen_gpu" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen GPU</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '3')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                            {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('gpu_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <div class="mb-1">
                            <label for="komponen_RAM" class="form-label">RAM (memory):</label>
                            <select id="komponen_RAM" name="id_komponen_ram" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen RAM</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '4')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                            {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('ram_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="komponen_storage" class="form-label">Storage:</label>
                            <select id="komponen_storage" name="id_komponen_storage" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen Storage</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '5')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                            {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('storage_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                    
                        <div class="mb-1">
                            <label for="komponen_PSU" class="form-label">PSU : </label>
                            <select id="komponen_PSU" name="id_komponen_psu" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen PSU</option>
                                @foreach ($komponen as $k)
                                @if ($k->id_kategori == '6')
                                    <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                        {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                @endif
                            @endforeach
                            </select>
                            @error('psu_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="komponen_casing" class="form-label">Casing :</label>
                            <select id="komponen_casing" name="id_komponen_casing" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen Casing</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '7')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                            {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('casing_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label for="komponen_cooling" class="form-label">Cooling CPU:</label>
                            <select id="komponen_cooling" name="id_komponen_cooler" class="form-select komponen" required>
                                <option value="" data-harga="0">Pilih Komponen Cooling CPU</option>
                                @foreach ($komponen as $k)
                                    @if ($k->id_kategori == '8')
                                        <option value="{{$k->id_komponen}}" data-harga="{{ $k->harga_komponen }}"> 
                                            {{$k->nama_komponen}} - Rp.{{ number_format($k->harga_komponen, 0, ',', '.') }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('cooling_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const selects = document.querySelectorAll(".komponen");
                                const totalHargaElem = document.getElementById("totalHarga");

                                function updateTotalHarga() {
                                    let total = 0;
                                    selects.forEach(select => {
                                        const selectedOption = select.options[select.selectedIndex];
                                        const harga = parseInt(selectedOption.getAttribute("data-harga")) || 0;
                                        total += harga;
                                    });
                                    totalHargaElem.textContent = "Rp." + new Intl.NumberFormat('id-ID').format(total);
                                }

                                selects.forEach(select => {
                                    select.addEventListener("change", updateTotalHarga);
                                });

                                updateTotalHarga(); // Hitung harga awal saat halaman dimuat
                            });
                        </script>

                        <div class="mt-3">
                            <h4 class="fw-bold">Total Harga: <span id="totalHarga">Rp.0</span></h4>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-success btn-lg" value="Rakit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

  @endsection