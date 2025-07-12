<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Product;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Tampilkan semua tugas.
     */
    public function index(Request $request)
    {
    $query = Task::with('product');

    if ($request->filled('search')) {
        $query->where('nama_tugas', 'like', '%' . $request->search . '%');
    }

    $tasks = $query->orderBy(
                    $request->query('sort_by', 'deadline'),
                    $request->query('direction', 'asc')
                )->get();

    return view('tasks.index', [
        'tasks' => $tasks,
        'sortBy' => $request->query('sort_by', 'deadline'),
        'direction' => $request->query('direction', 'asc'),
    ]);
    }
    /**
     * Tampilkan form tambah tugas.
     */
    public function create()
    {
    $products = Product::orderBy('kode_mk', 'asc')->get();
    return view('tasks.create', compact('products'));
    }

    /**
     * Simpan data tugas baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tugas' => 'required|string|max:255',
            'deadline' => 'required|date',
            'status' => 'required|in:Selesai,Belum Selesai',
            'product_id' => 'required|exists:products,id',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit tugas.
     */
    public function edit($id)
    {
    $task = Task::findOrFail($id);
    $products = Product::orderBy('kode_mk', 'asc')->get();
    return view('tasks.edit', compact('task', 'products'));
    }
    /**
     * Update data tugas.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'nama_tugas' => 'required|string|max:255',
            'deadline' => 'required|date',
            'status' => 'required|in:Selesai,Belum Selesai',
            'product_id' => 'required|exists:products,id',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil diperbarui!');
    }

    /**
     * Hapus tugas.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil dihapus!');
    }

    /**
 * Tampilkan detail tugas.
 */
public function show($id)
{
    $task = Task::with('product')->findOrFail($id);
    return view('tasks.show', compact('task'));
}
}