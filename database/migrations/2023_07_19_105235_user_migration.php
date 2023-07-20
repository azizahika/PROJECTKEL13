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
        Schema::create('USER', function (Blueprint $table) {
            $table->id('ID_USER', 10)->autoIncrement();
            $table->string('NAMA_USER', 25);
            $table->string('ALAMAT_USER', 25);
            $table->string('EMAIL_USER', 30);
            $table->string('PASSWORD', 10);
            $table->boolean('STATUS_USER');
            $table->string('NO_TELP', 13);
            $table->boolean('JENIS_KELAMIN');
            $table->timestamps(); // Optionally add timestamps (created_at, updated_at) columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('USER');
    }
};
