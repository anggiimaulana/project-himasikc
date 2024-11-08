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
        Schema::create('visimisi', function (Blueprint $table) {
            $table->year('tahun_kepengrusan')->primary();
            $table->string('visi');
            $table->string('misi');
            $table->unsignedBigInteger('id_admin');
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
        Schema::table('visimisi', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::dropIfExists('visimisi');
    }
};
