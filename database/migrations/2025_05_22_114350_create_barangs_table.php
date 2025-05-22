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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->string('id_barang');
            $table->unsignedInteger('id_kategori');
            $table->text('nama_barang');
            $table->string('merk');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('satuan_barang');
            $table->text('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
