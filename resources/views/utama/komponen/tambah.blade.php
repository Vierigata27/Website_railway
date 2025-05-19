@extends('utama.layout.apputama')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h1>Tambah Komponen</h1>
                </div>
                <div class="card-body px-4 pt-3 pb-2">
                    <form action="{{ route('komponen.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_komponen" class="form-label">Nama Komponen</label>
                            <input type="text" class="form-control" id="nama_komponen" name="nama_komponen" required>
                        </div>

                        <div class="mb-3">
                            <label for="brand_komponen" class="form-label">Brand Komponen</label>
                            <input type="text" class="form-control" id="brand_komponen" name="brand_komponen" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_kategori" class="form-label">Kategori Komponen</label>
                            <select class="form-control" id="id_kategori" name="id_kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id_kategori }}">{{ $kat->id_kategori }} - {{ $kat->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="soket_komponen" class="form-label">Soket Komponen</label>
                            <input type="text" class="form-control" id="soket_komponen" name="soket_komponen">
                        </div>

                        <div class="mb-3">
                            <label for="harga_komponen" class="form-label">Harga Komponen</label>
                            <input type="number" class="form-control" id="harga_komponen" name="harga_komponen" required>
                        </div>

                        <div class="mb-3">
                            <label for="performa_komponen" class="form-label">Performa Komponen</label>
                            <input type="text" class="form-control" id="performa_komponen" name="performa_komponen" required>
                        </div>

                        <div class="mb-3">
                            <label for="daya_komponen" class="form-label">Daya Komponen (Watt)</label>
                            <input type="number" class="form-control" id="daya_komponen" name="daya_komponen" required>
                        </div>

                        <div class="text-end">
                            <a href="{{ route('komponen.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan Komponen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
