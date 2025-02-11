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
        Schema::create('kampuses', function (Blueprint $table) {
            $table->integer('idkampus');
            $table->primary('idkampus');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('idkategori');
            $table->foreign('idkategori')->references('idkategori')->on('kategoris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampuses');
    }
};
