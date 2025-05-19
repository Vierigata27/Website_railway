<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi Rakitan PC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">

    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-4 text-center">💻 Rekomendasi Rakitan PC</h1>

        @isset($data)
            <!-- Menampilkan Skor Fitness -->
            <div class="mt-4 p-4 bg-blue-100 border border-blue-400 rounded-lg">
                <h3 class="text-lg font-semibold text-blue-800">📊 Skor Fitness</h3>
                <p class="text-gray-700">🛠 <strong>Nilai Fitness:</strong> {{ number_format($fitness_score, 6) }}</p>
            </div>

            <!-- Menampilkan Detail Rakitan -->
            <div class="border rounded-lg p-4 mt-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">🔧 Spesifikasi Rakitan Terbaik</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2 text-left">Komponen</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Brand</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                            {{-- <th class="border border-gray-300 px-4 py-2 text-left">Daya (Watt)</th> --}}
                            <th class="border border-gray-300 px-4 py-2 text-left">Performa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total_harga = 0;
                            $total_performa = 0;
                            $total_daya = 0;
                        @endphp

                        @foreach (['CPU', 'Motherboard', 'GPU', 'RAM', 'Storage', 'Power_Supply', 'Fan_CPU', 'Casing'] as $komponen)
                            @isset($$komponen)
                                <tr class="border border-gray-300">
                                    <td class="border border-gray-300 px-4 py-2">{{ ucfirst(str_replace('_', ' ', $komponen)) }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $$komponen['nama_komponen'] ?? '-' }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $$komponen['brand_komponen'] ?? '-' }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        Rp{{ isset($$komponen['harga_komponen']) ? number_format($$komponen['harga_komponen'], 0, ',', '.') : '0' }}
                                    </td>
                                    {{-- <td class="border border-gray-300 px-4 py-2">{{ $$komponen['daya_komponen'] ?? 0 }} W</td> --}}
                                    <td class="border border-gray-300 px-4 py-2">{{ number_format($$komponen['performa_asli'] ?? 0, 0, ',', '.') }}</td>
                                </tr>
                                @php
                                    $total_harga += $$komponen['harga_komponen'] ?? 0;
                                    $total_performa += $$komponen['performa_asli'] ?? 0;
                                    $total_daya += $$komponen['daya_komponen'] ?? 0;
                                @endphp
                            @endisset
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Menampilkan Ringkasan Rakitan -->
            <div class="mt-4 p-4 rounded-lg bg-gray-100 border border-gray-400">
                <h3 class="text-lg font-semibold text-gray-800">📊 Ringkasan Rakitan</h3>
                <p class="text-gray-700">💰 <strong>Total Harga Rakitan:</strong> Rp{{ number_format($total_harga, 0, ',', '.') }}</p>
                {{-- <p class="text-gray-700">⚡ <strong>Total Daya yang Dibutuhkan:</strong> {{ $total_daya }} W</p> --}}
                <p class="text-gray-700">🎯 <strong>Total Performa:</strong> {{ number_format($total_performa, 0, ',', '.') }}</p>
                <p class="text-gray-700">📌 <strong>Budget Anda:</strong> Rp{{ number_format($data['budget'], 0, ',', '.') }}</p>

                @if ($total_harga > $data['budget'])
                    <p class="text-red-600 font-semibold">⚠️ Total harga melebihi budget yang tersedia!</p>
                @else
                    <p class="text-green-600 font-semibold">✅ Rakitan sesuai dengan budget Anda!</p>
                @endif
            </div>

            <!-- Tombol Generate Ulang -->
            <div class="text-center mt-6">
                <form action="{{ route('form.rekomendasi') }}" method="POST">
                    @csrf
                    <input type="hidden" name="budget" value="{{ $data['budget'] }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg shadow">🔄 Generate Ulang</button>
                </form>
            </div>
        @else
            <p class="text-red-500 text-center">❌ Tidak ada data rekomendasi yang tersedia.</p>
        @endif
    </div>
</body>
</html>
