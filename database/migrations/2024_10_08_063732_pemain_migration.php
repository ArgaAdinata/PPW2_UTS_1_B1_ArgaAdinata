<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // id, nama_pemain, no_punggung, posisi)
    public function up(): void
    {
        Schema::create('pemain', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->string('posisi');
            $table->integer('no_punggung');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
