<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Rakitan PC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-4 text-center">Rekomendasi Rakitan PC</h1>

        @if(isset($data['rakitan_terbaik']))
            <!-- Menampilkan Data Rekomendasi -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Spesifikasi Rakitan Terbaik</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2 text-left">Komponen</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Performa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total_harga = 0;
                            $total_performa = 0;
                        @endphp
                        @foreach ($data['rakitan_terbaik'] as $key => $component)
                            <tr class="border border-gray-300">
                                <td class="border border-gray-300 px-4 py-2">{{ ucfirst($key) }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ isset($component['nama_komponen']) ? $component['nama_komponen'] : '-' }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    Rp{{ isset($component['harga_komponen']) ? number_format($component['harga_komponen'], 0, ',', '.') : '0' }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ isset($component['performa_komponen']) ? number_format($component['performa_komponen'], 0, ',', '.') : '0' }}
                                </td>
                            </tr>
                            @php
                                $total_harga += isset($component['harga_komponen']) ? $component['harga_komponen'] : 0;
                                $total_performa += isset($component['performa_komponen']) ? $component['performa_komponen'] : 0;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Menampilkan Total Harga, Total Performa, dan Budget -->
            <div class="mt-4 p-4 rounded-lg 
                @if ($total_harga > $data['budget']) bg-red-100 border-red-400 @else bg-green-100 border-green-400 @endif">
                <h3 class="text-lg font-semibold @if ($total_harga > $data['budget']) text-red-800 @else text-green-800 @endif">Ringkasan Rakitan</h3>
                <p class="text-gray-700">💰 **Total Harga Rakitan**: <strong>Rp{{ number_format($total_harga, 0, ',', '.') }}</strong></p>
                <p class="text-gray-700">🎯 **Total Performa Rakitan**: <strong>{{ number_format($total_performa, 0, ',', '.') }}</strong></p>
                <p class="text-gray-700">📌 **Budget yang Ditetapkan**: <strong>Rp{{ number_format($data['budget'], 0, ',', '.') }}</strong></p>

                @if ($total_harga > $data['budget'])
                    <p class="text-red-600 font-semibold">⚠️ Total harga **melebihi budget**!</p>
                @else
                    <p class="text-green-600 font-semibold">✅ Rakitan **sesuai budget!**</p>
                @endif
            </div>

            <!-- Menampilkan Skor Fitness -->
            <div class="mt-4 p-4 bg-blue-100 border border-blue-400 rounded-lg">
                <h3 class="text-lg font-semibold text-blue-800">Skor Fitness</h3>
                <p class="text-gray-700">📊 **Nilai Fitness**: <strong>{{ number_format($data['fitness_score'], 2) }}</strong></p>
            </div>

            <!-- Menampilkan Fitness Terbaik per Generasi -->
            @if(isset($data['history']) && count($data['history']) > 0)
                <div class="mt-4 p-4 bg-gray-100 border border-gray-300 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Fitness Terbaik per Generasi</h3>
                    <table class="w-full border-collapse border border-gray-300 mt-2">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2 text-left">Generasi</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Fitness</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Performa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['history'] as $history)
                                <tr class="border border-gray-300">
                                    <td class="border border-gray-300 px-4 py-2">{{ $history['Generasi'] }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ number_format($history['Fitness'], 6) }}</td>
                                    <td class="border border-gray-300 px-4 py-2">Rp{{ number_format($history['Harga'], 0, ',', '.') }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ number_format($history['Performa'], 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <!-- Tombol Generate Ulang -->
            <div class="text-center mt-6">
                <form action="{{ route('rekomendasi.get') }}" method="POST">
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
