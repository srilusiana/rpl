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
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_wali')->index();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->enum('jenisKelamin', ['laki-laki', 'perempuan']);
            $table->integer('umur');
            $table->float('tinggiBadan');
            $table->float('beratBadan');
            $table->float('lingkarKepala');
            $table->string('rekomendasiSistem');
            $table->string('rekomendasiDokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
