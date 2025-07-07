<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Task</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body { background-color: #f0fdf4; font-family: 'Nunito', sans-serif; margin: 0; padding: 0; }
    header { text-align: center; padding: 2rem; background: #cdeac0; }
    .container { max-width: 600px; margin: 2rem auto; background: #fff; padding: 2rem; border-radius: 1rem; }
    label { display: block; margin-top: 1rem; font-weight: 600; }
    input, select { width: 100%; padding: 0.7rem; border: 1px solid #ddd; border-radius: 0.6rem; margin-top: 0.3rem; }
    button { background: #84a59d; color: #fff; border: none; padding: 0.7rem 1.4rem; border-radius: 0.6rem; margin-top: 1rem; }
    a.back-link { display: inline-block; margin-top: 1rem; text-decoration: none; color: #52796f; }
  </style>
</head>
<body>
  <header>
    <h1>Tambah Tugas</h1>
  </header>
  <div class="container">
    <form action="{{ route('tasks.store') }}" method="POST">
      @csrf

      <label for="title">Judul Tugas</label>
      <input type="text" id="title" name="title" required>

      <label for="course">Mata Kuliah</label>
      <input type="text" id="course" name="course" required>

      <label for="deadline">Deadline</label>
      <input type="date" id="deadline" name="deadline">

      <label for="status">Status</label>
      <select id="status" name="status">
        <option value="in_progress">In Progress</option>
        <option value="done">Done</option>
      </select>

      <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('tasks.index') }}" class="back-link">← Kembali</a>
  </div>
</body>
</html>
