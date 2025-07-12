@extends('layouts.app')

@section('title', 'Tambah Tugas')

@section('content')
    <h1 class="mb-4">Tambah Tugas</h1>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tombol tambah mata kuliah --}}
    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-outline-secondary">+ Tambah Mata Kuliah</a>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Tugas</label>
            <input type="text" name="nama_tugas" class="form-control" required value="{{ old('nama_tugas') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Deadline</label>
            <input type="date" name="deadline" class="form-control" required value="{{ old('deadline') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="">-- Pilih Status --</option>
                <option value="Belum Selesai" {{ old('status') == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Mata Kuliah</label>
            <select name="product_id" class="form-select" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach ($products->unique('kode_mk')->sortBy('kode_mk') as $product)
                    <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                        {{ $product->kode_mk }} - {{ strtoupper($product->nama_mk) }} ({{ $product->kode_dosen }}) {{ $product->dosen }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Tugas</button>
    </form>
@endsection