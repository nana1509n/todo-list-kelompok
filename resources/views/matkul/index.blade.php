<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah & Kode Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #e8f5e9; /* hijau pastel */
        }
    </style>
</head>
<body class="p-8">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-2xl font-bold text-green-700 mb-6">Daftar Mata Kuliah & Kode Dosen</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $data = [
                    [
                        'matkul' => 'DU23127 - BAHASA INDONESIA (4578)',
                        'dosen' => 'RANI SRI WAHYUNI, M.Hum.',
                        'kode' => 'TIF001'
                    ],
                    [
                        'matkul' => 'DU23128 - PANCASILA (4581)',
                        'dosen' => 'DEDE IRMAYANTI, ST., M.Kom.',
                        'kode' => 'TIF002'
                    ],
                    [
                        'matkul' => 'IF23121 - ALGORITMA TEORI PEMROGRAMAN (4585)',
                        'dosen' => 'CHANDRA DEWI LESTARI, S.Pd., MT',
                        'kode' => 'TIF003'
                    ],
                    [
                        'matkul' => 'IF23125 - DISKRIT MATEMATIKA (4580)',
                        'dosen' => 'BAYU PRASETIO, S.Kom., M.Kom',
                        'kode' => 'TIF004'
                    ],
                    [
                        'matkul' => 'IF23126 - STATISTIK (4584)',
                        'dosen' => 'Dr. SRI SUHARTINI, M.Si.',
                        'kode' => 'TIF005'
                    ],
                    [
                        'matkul' => 'IF23222 - PRAKTEK ALGORITMA PEMROGRAMAN (4583)',
                        'dosen' => 'DADI ISKANDAR, ST',
                        'kode' => 'TIF006'
                    ],
                    [
                        'matkul' => 'IF23223 - LANJUT WEB PEMROGRAMAN (4582)',
                        'dosen' => 'IRSAN JAELANI, ST, M.Kom',
                        'kode' => 'TIF007'
                    ],
                    [
                        'matkul' => 'IF23224 - DATA DASAR (4579)',
                        'dosen' => 'SYARIFUL ALAM, S.Si., M.Kom',
                        'kode' => 'TIF008'
                    ],
                ];
            @endphp

            @foreach($data as $item)
                <a href="#" class="block bg-white p-5 rounded-xl shadow hover:shadow-lg hover:scale-105 transition-all">
                    <div class="text-green-500 text-4xl mb-2">📘</div>
                    <div class="font-semibold text-lg">{{ $item['matkul'] }}</div>
                    <div class="text-gray-600 mt-1">{{ $item['dosen'] }}</div>
                    <div class="text-sm text-green-700 mt-2">Kode Dosen: <strong>{{ $item['kode'] }}</strong></div>
                </a>
            @endforeach
        </div>

        <a href="{{ url()->previous() }}" class="inline-block mt-6 text-green-600 hover:underline">← Kembali</a>
    </div>
</body>
</html>
