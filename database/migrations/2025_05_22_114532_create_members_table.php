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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Kolom primary key auto-increment
            $table->string('nm_member'); // Nama member
            $table->text('alamat_member'); // Alamat member
            $table->string('telepon'); // Nomor telepon
            $table->string('email'); // Alamat email
            $table->text('gambar'); // Gambar (bisa berupa path/file name)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
