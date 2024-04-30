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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buku_id'); 
            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');
            $table->string('nama');
            $table->string('kondisi_sebelum');
            $table->string('kondisi_sesudah');
            $table->date('peminjaman');
            $table->date('pengembalian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
