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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('wa');
            $table->string('bukti_transaksi');
            $table->unsignedBigInteger('id_barang');
            $table->integer('status');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            // foreign key dari admin
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');

            // foreign key dari barang
            $table->foreign('id_barang')->references('id')->on('store')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_barang']); 
        });

        Schema::dropIfExists('transaksi');
    }
};
