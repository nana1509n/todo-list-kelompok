@extends('layouts.app')

@section('title', 'Detail Tugas')

@section('content')
    <div class="card p-4 shadow-sm">
        <h2 class="mb-4">Detail Tugas</h2>

        <div class="mb-3">
            <strong>Nama Tugas:</strong>
            <div>{{ $task->nama_tugas }}</div>
        </div>

        <div class="mb-3">
            <strong>Deadline:</strong>
            <div>{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</div>
        </div>

        <div class="mb-3">
            <strong>Status:</strong>
            <div>
                <span class="badge bg-{{ $task->status == 'Selesai' ? 'success' : 'secondary' }}">
                    {{ $task->status }}
                </span>
            </div>
        </div>

        <div class="mb-3">
            <strong>Mata Kuliah:</strong>
            <div>
                @if ($task->product)
                    {{ $task->product->kode_mk }} - {{ strtoupper($task->product->nama_mk) }} ({{ $task->product->id }})
                @else
                    -
                @endif
            </div>
        </div>

        <div class="mb-3">
            <strong>Dosen:</strong>
            <div>{{ $task->product->dosen ?? '-' }}</div>
        </div>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection