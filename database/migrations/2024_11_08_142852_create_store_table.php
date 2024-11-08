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
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('nama_barang');
            $table->string('category');
            $table->text('desc');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('img');
            $table->unsignedBigInteger('id_admin');
            $table->integer('status');
            $table->timestamps();

            // foreign key dari admin
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // ketika rollback, hapus foreign key terlebih dahul
        Schema::table('store', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::dropIfExists('store');
    }
};
