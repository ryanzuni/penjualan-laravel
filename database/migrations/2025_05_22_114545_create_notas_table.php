<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id(); // Primary key AUTO_INCREMENT
            $table->unsignedInteger('id_barang'); // Asumsi ini foreign key dari tabel barang
            $table->unsignedInteger('id_member'); // Asumsi ini foreign key dari tabel members
            $table->string('jumlah'); // Bisa diubah ke integer jika pasti angka
            $table->string('total'); // Bisa diubah ke decimal jika menyimpan nilai uang
            $table->string('periode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
