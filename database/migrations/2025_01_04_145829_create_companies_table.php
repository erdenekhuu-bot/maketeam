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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name')->nullable();
            $table->mediumText('web')->nullable();
            $table->enum('city', ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Semarang', 'Malang'])->default('Jakarta');
            $table->mediumText('logo')->nullable();
            $table->mediumText('cover')->nullable();
            $table->mediumText('gallery')->nullable();
            $table->mediumText('about')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('linkedin')->nullable();
            $table->mediumText('twitter')->nullable();
            $table->mediumText('facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
