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
        Schema::create('paket_perjalanan', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Mengubah kolom 'name' menjadi 'title'
            $table->text('description');
            $table->decimal('price', 8, 2); // Harga paket perjalanan
            $table->integer('duration'); // Durasi perjalanan dalam hari
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('paket_perjalanan');
    }
};