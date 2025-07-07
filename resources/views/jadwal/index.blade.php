<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jadwal Dosen dan Mata Kuliah</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #e8f5e9; /* hijau pastel lembut */
    }
  </style>
</head>
<body class="p-8">
  <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-6">
    <h1 class="text-3xl font-bold text-green-700 mb-6">Jadwal Dosen & Mata Kuliah</h1>
    
    <table class="min-w-full bg-white border border-green-200">
      <thead class="bg-green-100">
        <tr>
          <th class="py-3 px-4 border-b text-left">Hari</th>
          <th class="py-3 px-4 border-b text-left">Mata Kuliah</th>
          <th class="py-3 px-4 border-b text-left">Dosen Pengampu</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Senin</td>
          <td class="py-3 px-4 border-b">
            Basis Data<br>Bahasa Indonesia
          </td>
          <td class="py-3 px-4 border-b">
            DEDE IRMAYANTI, ST., M.Kom.<br>
            RANI SRI WAHYUNI, M.Hum.
          </td>
        </tr>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Selasa</td>
          <td class="py-3 px-4 border-b">Pancasila</td>
          <td class="py-3 px-4 border-b">Dr. SRI SUHARTINI, M.Si.</td>
        </tr>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Rabu</td>
          <td class="py-3 px-4 border-b">Libur</td>
          <td class="py-3 px-4 border-b">-</td>
        </tr>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Kamis</td>
          <td class="py-3 px-4 border-b">
            Teori Algoritma Pemrograman<br>Matematika Diskrit
          </td>
          <td class="py-3 px-4 border-b">
            IRSAN JAELANI, ST., M.Kom.<br>
            CHANDRA DEWI LESTARI, S.Pd., MT.
          </td>
        </tr>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Jumat</td>
          <td class="py-3 px-4 border-b">
            Praktek Algoritma Pemrograman<br>Statistika
          </td>
          <td class="py-3 px-4 border-b">
            DADI ISKANDAR, ST.<br>
            SYARIFUL ALAM, S.Si., M.Kom.
          </td>
        </tr>
        <tr class="hover:bg-green-50">
          <td class="py-3 px-4 border-b">Sabtu</td>
          <td class="py-3 px-4 border-b">Pemrograman Web Lanjut</td>
          <td class="py-3 px-4 border-b">BAYU PRASETIO, S.Kom., M.Kom.</td>
        </tr>
      </tbody>
    </table>

    <a href="{{ url()->previous() }}" class="inline-block mt-4 text-green-600 hover:underline">← Kembali</a>
  </div>
</body>
</html>
