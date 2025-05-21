<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Simulasi Rakit Komputer</title>
    <style>
        body {
            font-family: DejaVu Sans, Helvetica, sans-serif; /* Kompatibel font */
            background-color: #ffffff; /* Ubah ke putih agar hasil print bagus */
            margin: 20px;
            color: #000000;
        }
    
        .container {
            margin-top: 30px;
        }
    
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12px;
        }
    
        .table th, .table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: center;
        }
    
        .table th {
            background-color: #343a40;
            color: #ffffff;
        }
    
        .table tr:nth-child(even) {
            background-color: #f0f0f0;
        }
    
        /* Hover tidak berfungsi di PDF, bisa dihapus atau diganti efek statis */
        .table tr:nth-child(odd) {
            background-color: #ffffff;
        }
    
        .highlight {
            color: #28a745;
            font-weight: bold;
        }
    
        .total-row {
            background-color: #343a40;
            color: #ffffff;
            font-weight: bold;
        }
    
        h2, h4 {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 style="text-align: center; color: #0d6efd;">Hasil Simulasi Rakit Komputer</h2>
    <hr>
    <h4>Nama Pengguna: <span class="highlight">{{ $rekomendasi->pengguna->nama ?? 'Tidak Diketahui' }}</span></h4>
    <h4>Tanggal Rakit: {{ $rekomendasi->tanggal_rakit ?? 'Tidak Tersedia' }}</h4>

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
            @php $no = 1; @endphp
            @foreach(['cpu', 'motherboard', 'gpu', 'ram', 'storage', 'psu', 'casing', 'cooler'] as $komponen)
            <tr>
                <td style="text-align: center;">{{ $no++ }}</td>
                <td><strong>{{ ucfirst($komponen) }}</strong></td>
                <td>{{ optional($rekomendasi->rakit->$komponen)->nama_komponen ?? 'N/A' }}</td>
                <td style="text-align: center;">{{ optional($rekomendasi->rakit->$komponen)->performa_komponen ?? 'N/A' }}</td>
                <td style="text-align: right;">Rp. {{ number_format(optional($rekomendasi->rakit->$komponen)->harga_komponen ?? 0, 0, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="3" style="text-align: center;">Total Hasil</td>
                <td style="text-align: center;">{{ $rekomendasi->total_performa ?? '0' }}</td>
                <td style="text-align: right;">Rp. {{ number_format($rekomendasi->total_buget ?? 0, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
