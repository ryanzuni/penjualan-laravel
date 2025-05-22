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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_barang'); // Asumsi foreign key dari tabel barang
            $table->unsignedInteger('id_member'); // Asumsi foreign key dari tabel members
            $table->string('jumlah'); // Bisa diganti integer jika data angka
            $table->string('total'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
