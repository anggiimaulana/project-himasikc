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
        Schema::create('proker', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('id_divisi');
            $table->integer('jenis');
            $table->text('logo');
            $table->text('desc');
            $table->text('tujuan');
            $table->text('sasaran');
            $table->text('hasil');
            $table->text('docs_1');
            $table->text('docs_2');
            $table->text('docs_3');
            $table->year('tahun_kepengurusan');
            $table->unsignedBigInteger('id_admin');
            $table->integer('status');
            $table->timestamps();

            // foreign key dari admin
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');

            // foreign key dari divisi
            $table->foreign('id_divisi')->references('id')->on('divisi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proker', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::table('proker', function (Blueprint $table) {
            $table->dropForeign(['id_divisi']); 
        });

        Schema::dropIfExists('proker');
    }
};
