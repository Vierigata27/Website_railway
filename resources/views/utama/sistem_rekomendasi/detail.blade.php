@extends('utama.layout.apputama')

@section('content')
<h2 class="fw-bold">Hasil Simulasi Rakit Komputer</h2>
<br>
<h3>Nama Pengguna: <span class="text-success">{{ $rekomendasi->pengguna->nama ?? 'Tidak Diketahui' }}</span></h3>
<h3>Tanggal Rakit: {{ $rekomendasi->tanggal_rakit ?? 'Tidak Tersedia' }}</h3>

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
        @php $no = 1; @endphp
        @foreach(['cpu', 'motherboard', 'gpu', 'ram', 'storage', 'psu', 'casing', 'cooler'] as $komponen)
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ ucfirst($komponen) }}</td>
            <td>{{ optional($rekomendasi->rakit->$komponen)->nama_komponen ?? 'N/A' }}</td>
            <td>{{ optional($rekomendasi->rakit->$komponen)->performa_komponen ?? 'N/A' }}</td>
            <td>Rp. {{ number_format(optional($rekomendasi->rakit->$komponen)->harga_komponen ?? 0, 0, ',', '.') }}</td>
        </tr>
        @endforeach
        <tr class="fw-bold">
            <th colspan="3">Total Hasil</th>
            <td>{{ $rekomendasi->total_performa ?? '0' }}</td>
            <td>Rp. {{ number_format($rekomendasi->total_buget ?? 0, 0, ',', '.') }}</td>
        </tr>
    </tbody>
</table>

<a href="{{ route('download_rakit_admin.pdf', $rekomendasi->id_rekomendasi) }}" class="btn btn-danger">
    <i class="fas fa-file-pdf"></i> Download PDF
</a>
<br>
<!-- Tombol Back -->
<a href="{{ url('/tabel_rekomendasi') }}" class="btn btn-primary mt-3">Kembali ke Home</a>
@endsection
