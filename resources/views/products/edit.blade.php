@extends('layouts.app')

@section('title', 'Edit Mata Kuliah')

@section('content')
    <h1 class="mb-4">Edit Mata Kuliah</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode MK</label>
            <input type="text" name="kode_mk" class="form-control" required value="{{ old('kode_mk', $product->kode_mk) }}">
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
                    <option value="{{ $mk }}" {{ old('nama_mk', $product->nama_mk) == $mk ? 'selected' : '' }}>{{ $mk }}</option>
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
                    <option value="{{ $dosen }}" {{ old('dosen', $product->dosen) == $dosen ? 'selected' : '' }}>{{ $dosen }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection