<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #e8f5e9; /* hijau pastel lembut */
        }
    </style>
</head>
<body class="p-8">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md p-6">
        <h1 class="text-2xl font-bold text-green-700 mb-4">Daftar Dosen</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 border-b text-left">Kode Dosen</th>
                    <th class="py-2 border-b text-left">Nama Dosen</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">DU23127</td>
                    <td class="py-2 border-b">RANI SRI WAHYUNI, M.Hum.</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23224</td>
                    <td class="py-2 border-b">DEDE IRMAYANTI, ST., M.Kom.</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23125</td>
                    <td class="py-2 border-b">CHANDRA DEWI LESTARI, S.Pd., MT</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23223</td>
                    <td class="py-2 border-b">BAYU PRASETIO, S.Kom., M.Kom</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">DU23128</td>
                    <td class="py-2 border-b">Dr. SRI SUHARTINI, M.Si.</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23222</td>
                    <td class="py-2 border-b">DADI ISKANDAR, ST</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23121</td>
                    <td class="py-2 border-b">IRSAN JAELANI, ST, M.Kom</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="py-2 border-b">IF23136</td>
                    <td class="py-2 border-b">SYARIFUL ALAM, S.Si., M.Kom</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ url()->previous() }}" class="inline-block mt-4 text-green-600 hover:underline">← Kembali</a>
    </div>
</body>
</html>
