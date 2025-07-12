@extends('layouts.app')

@section('title', 'Edit Tugas')

@section('content')
    <h1 class="mb-4">Edit Tugas</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Tugas</label>
            <input type="text" name="nama_tugas" class="form-control" required value="{{ old('nama_tugas', $task->nama_tugas) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Deadline</label>
            <input type="date" name="deadline" class="form-control" required value="{{ old('deadline', $task->deadline) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="">-- Pilih Status --</option>
                <option value="Belum Selesai" {{ old('status', $task->status) == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                <option value="Selesai" {{ old('status', $task->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Mata Kuliah</label>
            <select name="product_id" class="form-select" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ old('product_id', $task->product_id) == $product->id ? 'selected' : '' }}>
                        {{ $product->kode_mk }} - {{ $product->nama_mk }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection