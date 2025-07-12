<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('nama_tugas');
        $table->date('deadline');
        $table->enum('status', ['Belum', 'Proses', 'Selesai'])->default('Belum');
        $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // relasi ke mata kuliah
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
