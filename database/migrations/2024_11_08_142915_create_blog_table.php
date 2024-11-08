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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('judul');
            $table->text('desc');
            $table->text('author');
            $table->string('img');
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
        Schema::table('blog', function (Blueprint $table) {
            $table->dropForeign(['id_admin']); 
        });

        Schema::dropIfExists('blog');
    }
};
