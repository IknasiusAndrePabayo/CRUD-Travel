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
            $table->string('customer_name');
            $table->foreignId('travel_package_id')->constrained('paket_perjalanan')->onDelete('cascade');
            $table->decimal('total_price', 8, 2);
            $table->string('status');
            // tambahkan atribut lain sesuai kebutuhan
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
