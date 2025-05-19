<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Simulasi Rakit Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .table-custom {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #343a40 !important;
            color: white !important;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e2e6ea;
        }
        .highlight {
            color: #28a745;
            font-weight: bold;
        }
        .total-row {
            background-color: #343a40 !important;
            color: white !important;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="fw-bold text-center text-primary">Hasil Simulasi Rakit Komputer</h2>
    <hr>
    <h4>Nama Pengguna: <span class="highlight">{{ $rekomendasi->pengguna->nama ?? 'Tidak Diketahui' }}</span></h4>
    <h4>Tanggal Rakit: {{ $rekomendasi->tanggal_rakit ?? 'Tidak Tersedia' }}</h4>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered table-custom">
            <thead class="text-center">
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
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="fw-bold">{{ ucfirst($komponen) }}</td>
                    <td>{{ optional($rekomendasi->rakit->$komponen)->nama_komponen ?? 'N/A' }}</td>
                    <td class="text-center">{{ optional($rekomendasi->rakit->$komponen)->performa_komponen ?? 'N/A' }}</td>
                    <td class="text-end">Rp. {{ number_format(optional($rekomendasi->rakit->$komponen)->harga_komponen ?? 0, 0, ',', '.') }}</td>
                </tr>
                @endforeach
                <tr class="total-row text-center">
                    <td colspan="3">Total Hasil</td>
                    <td>{{ $rekomendasi->total_performa ?? '0' }}</td>
                    <td class="text-end">Rp. {{ number_format($rekomendasi->total_buget ?? 0, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
