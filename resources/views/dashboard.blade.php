<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Lucu Hijau Soft</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body class="bg-green-100 min-h-screen p-6">
  <div class="max-w-7xl mx-auto">
    <header class="mb-8 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-green-700">Hi, Admin! 👋</h1>
      <!-- Tombol Logout dihapus karena sudah ada card logout -->
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card To-Do List -->
      <a href="/tasks" class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
        <div class="text-green-500 text-4xl">📝</div>
        <div class="mt-4 text-xl font-semibold">To-Do List</div>
        <p class="text-gray-500">Lihat dan kelola tugasmu di sini</p>
      </a>

      <!-- Card Profile -->
      <a href="/profile" class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
        <div class="text-green-500 text-4xl">👤</div>
        <div class="mt-4 text-xl font-semibold">Profile</div>
        <p class="text-gray-500">Lihat dan edit profil kamu</p>
      </a>

      <!-- Card Logout -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
          <div class="text-green-500 text-4xl">🚪</div>
          <div class="mt-4 text-xl font-semibold">Logout</div>
          <p class="text-gray-500">Keluar dari aplikasi</p>
        </button>
      </form>
    </div>

    <!-- Baris Bawah -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
      <!-- Card Data Dosen -->
      <a href="{{ route('dosen.index') }}" class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
        <div class="text-green-500 text-4xl">📋</div>
        <div class="mt-4 text-xl font-semibold">Data Dosen</div>
        <p class="text-gray-500">Daftar dosen & kode dosennya</p>
      </a>

      <!-- Card Jadwal Dosen -->
      <a href="{{ route('jadwal.index') }}" class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">
        <div class="text-green-500 text-4xl">📅</div>
        <div class="mt-4 text-xl font-semibold">Jadwal Dosen</div>
        <p class="text-gray-500">Mata kuliah & jadwal tiap dosen</p>
      </a>
    </div>

    <footer class="mt-12 text-center text-gray-500">
      © Todo list kelompok 1 ✨
    </footer>
  </div>
</body>
</html>
