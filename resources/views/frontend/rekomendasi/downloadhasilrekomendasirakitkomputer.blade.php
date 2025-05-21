@extends('frontend.layout.appfrontend')
@section('content')

<style>
    body {
        background-color: #ffffff; /* Ubah ke putih untuk hemat tinta saat print */
        color: #000000;
        font-family: DejaVu Sans, sans-serif;
    }
    .hero {
        text-align: center;
        padding: 30px 20px;
    }
    .hero h2 {
        font-size: 20px;
        font-weight: bold;
        color: #16c60c;
    }
    .hero h3, .hero h4 {
        font-weight: bold;
        color: #222222;
    }
    .hero p {
        font-size: 14px;
        color: #444444;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 12px;
    }
    .table th, .table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #000;
    }
    .table thead {
        background-color: #cccccc;
    }
    .table tfoot {
        background-color: #eeeeee;
        font-weight: bold;
    }
    .total-row {
        background-color: #16c60c;
        color: white;
        font-weight: bold;
    }
</style>

<section id="hero" class="hero section text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold">Hasil Simulasi Rakit Komputer</h2>
                <h3>Nama Pengguna: <span class="text-success">{{ $rekomendasi->pengguna->nama ?? 'Tidak Diketahui' }}</span></h3>
                <h3>Tanggal Rakit: {{ $rekomendasi->tanggal_rakit }}</h3>

                <div class="table-container">
                    <table class="table">
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
                            @php
                                $components = [
                                    ['name' => 'CPU', 'relation' => 'cpu'],
                                    ['name' => 'Motherboard', 'relation' => 'motherboard'],
                                    ['name' => 'GPU', 'relation' => 'gpu'],
                                    ['name' => 'RAM', 'relation' => 'ram'],
                                    ['name' => 'Storage', 'relation' => 'storage'],
                                    ['name' => 'PSU', 'relation' => 'psu'],
                                    ['name' => 'Casing', 'relation' => 'casing'],
                                    ['name' => 'Cooler', 'relation' => 'cooler'],
                                ];
                            @endphp

                            @foreach ($components as $index => $component)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $component['name'] }}</td>
                                    <td>{{ optional($rekomendasi->rakit->{$component['relation']})->nama_komponen ?? 'Data Tidak Tersedia' }}</td>
                                    <td>{{ optional($rekomendasi->rakit->{$component['relation']})->performa_komponen ?? '0' }}</td>
                                    <td>Rp. {{ number_format(optional($rekomendasi->rakit->{$component['relation']})->harga_komponen ?? 0, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="total-row">
                                <td colspan="3">Total Hasil</td>
                                <td>{{ optional($rekomendasi)->total_performa ?? '0' }}</td>
                                <td>Rp. {{ number_format(optional($rekomendasi)->total_buget ?? 0, 0, ',', '.') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
