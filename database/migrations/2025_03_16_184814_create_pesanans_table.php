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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->null();
            $table->string('nama_pelanggan');
            $table->text('produk_pesanan');
            $table->integer('total_harga');
            $table->date('tanggal_pesanan');
            $table->enum('status',['proses','selesai'])->default('proses');
            $table->text('alamat');
            $table->string('metode_pembayaran');
            $table->date('tanggal_pengambilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
