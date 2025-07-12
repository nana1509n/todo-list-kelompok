@extends('layouts.app')

@section('title', 'Daftar Mata Kuliah')

@section('content')
    <div class="mt-4 mb-4">
        <h1>Daftar Mata Kuliah</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Tambah Mata Kuliah</a>

        @if ($products->isEmpty())
            <div class="alert alert-info">Belum ada data mata kuliah.</div>
        @else
            <table class="table table-hover table-bordered">
                <thead class="table-pink text-center">
                    <tr>
                        <th>ID</th>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
                        <th>Dosen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->kode_mk }}</td>
                            <td>{{ $product->nama_mk }}</td>
                            <td>{{ $product->dosen }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection