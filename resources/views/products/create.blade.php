<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(184, 54, 108);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 720px;
        }
        h1 {
            color: #c2185b;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #d81b60;
            border-color: #d81b60;
        }
        .btn-primary:hover {
            background-color: #c2185b;
            border-color: #c2185b;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">

    <div class="container">
        <h1>Tambah Mata Kuliah</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ada kesalahan:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode MK</label>
                <input type="text" name="kode_mk" class="form-control" required value="{{ old('kode_mk') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Mata Kuliah</label>
                <select name="nama_mk" class="form-select" required>
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach ([
                        'DU23127 - BAHASA INDONESIA (4578)',
                        'DU23128 - PANCASILA (4581)',
                        'IF23121 - ALGORITMA TEORI PEMROGRAMAN (4585)',
                        'IF23125 - DISKRIT MATEMATIKA (4580)',
                        'IF23126 - STATISTIK (4584)',
                        'IF23222 - PRAKTEK ALGORITMA PEMROGRAMAN (4583)',
                        'IF23223 - LANJUT WEB PEMROGRAMAN (4582)',
                        'IF23224 - DATA DASAR (4579)'
                    ] as $mk)
                        <option value="{{ $mk }}" {{ old('nama_mk') == $mk ? 'selected' : '' }}>{{ $mk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Dosen</label>
                <select name="dosen" class="form-select" required>
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ([
                        'RANI SRI WAHYUNI, M.Hum.',
                        'DEDE IRMAYANTI, ST., M.Kom.',
                        'CHANDRA DEWI LESTARI, S.Pd., MT',
                        'BAYU PRASETIO, S.Kom., M.Kom',
                        'Dr. SRI SUHARTINI, M.Si.',
                        'DADI ISKANDAR, ST',
                        'IRSAN JAELANI, ST, M.Kom',
                        'SYARIFUL ALAM, S.Si., M.Kom'
                    ] as $dosen)
                        <option value="{{ $dosen }}" {{ old('dosen') == $dosen ? 'selected' : '' }}>{{ $dosen }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>
</html>