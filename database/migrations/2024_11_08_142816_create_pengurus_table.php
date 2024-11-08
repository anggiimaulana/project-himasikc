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
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nim')->unique();
            $table->string('kelas');
            $table->unsignedBigInteger('id_jabatan');
            $table->string('motto');
            $table->string('sosmed');
            $table->string('img');
            $table->year('tahun_kepengurusan');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            // foreign key dari admin
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');

            // foreign key dari jabatan
            $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengurus', function (Blueprint $table) {
            $table->dropForeign(['id_jabatan']); 
        });

        Schema::table('pengurus', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::dropIfExists('pengurus');
    }
};
