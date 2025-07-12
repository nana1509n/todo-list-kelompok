<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Biar lebih rapi, data diurutkan berdasarkan kode MK
        $products = Product::orderBy('kode_mk')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi data input termasuk kode_dosen jika diperlukan
        $validated = $request->validate([
            'kode_mk' => 'required|string|max:10',
            'nama_mk' => 'required|string|max:255',
            'dosen'   => 'required|string|max:255',
            'kode_dosen' => 'nullable|string|max:10',
        ]);

        Product::create($validated);

        // Langsung arahkan ke halaman tambah tugas setelah menambahkan mata kuliah
        return redirect()->route('tasks.create')->with('success', 'Mata kuliah berhasil ditambahkan. Silakan tambahkan tugas.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|string|max:10',
            'nama_mk' => 'required|string|max:255',
            'dosen'   => 'required|string|max:255',
            'kode_dosen' => 'nullable|string|max:10',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Data berhasil dihapus!');
    }
}