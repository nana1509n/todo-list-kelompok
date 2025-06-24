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
    Schema::create('matkul_mahasiswa', function (Blueprint $table) {
        $table->id();
        $table->string('nim'); // atau relasi ke tabel user
        $table->string('kode_matkul');
        $table->string('nama_matkul');
        $table->timestamps();
    });
}
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul_mahasiswa');
    }
};
