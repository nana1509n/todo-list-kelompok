<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Daftar Tugas</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      background-color: #e6f4ea;
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background: #b7e4c7;
      padding: 2rem;
      text-align: center;
    }
    header h1 {
      margin: 0;
      color: #386641;
    }
    .container {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1rem;
    }
    .create-btn {
      display: inline-block;
      margin-bottom: 1.5rem;
      background: #52b788;
      color: #fff;
      padding: 0.6rem 1.2rem;
      border-radius: 0.6rem;
      text-decoration: none;
      font-weight: 600;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    th, td {
      text-align: left;
      padding: 1rem;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #d8f3dc;
      color: #386641;
    }
    tr:hover td {
      background: #f0fdf4;
    }
    .actions a,
    .actions form button {
      text-decoration: none;
      color: #fff;
      padding: 0.4rem 0.8rem;
      border-radius: 0.4rem;
      font-size: 0.85rem;
      margin-right: 0.3rem;
      border: none;
      cursor: pointer;
    }
    .edit-btn {
      background: #74c69d;
    }
    .delete-btn {
      background: #d9534f;
    }
  </style>
</head>
<body>
  <header>
    <h1>🌿 TO DO LIST</h1>
  </header>
  <div class="container">
    <a href="{{ route('tasks.create') }}" class="create-btn">+ Tambah Tugas</a>
    <a href="{{ route('tasks.progress') }}" class="create-btn" style="background:#40916c;">📈 Lihat Progress</a>


    @if($tasks->count())
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>Mata Kuliah</th>
          <th>Deadline</th>
          <th>Status Deadline</th>
          <th>Status Tugas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $index => $task)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $task->title }}</td>
          <td>{{ $task->course }}</td>
          <td>{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</td>
          <td>
            @php
              $today = \Carbon\Carbon::today();
              $deadline = \Carbon\Carbon::parse($task->deadline);
              $diffDays = $today->diffInDays($deadline, false);
            @endphp
            @if($diffDays < 0)
              <span style="color:#d9534f;">Lewat</span>
            @elseif($diffDays <= 2)
              <span style="color:#f0ad4e;">Mepet</span>
            @else
              <span style="color:#5cb85c;">Aman</span>
            @endif
          </td>
          <td>
            @if($task->status === 'done')
              ✅ Selesai
            @else
              ⏳ Proses
            @endif
          </td>
          <td class="actions">
            <a href="{{ route('tasks.edit', $task->id) }}" class="edit-btn">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete-btn" onclick="return confirm('Yakin ingin menghapus tugas ini?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
      <p>Tidak ada tugas. Yuk tambahkan!</p>
    @endif
  </div>
</body>
</html>
