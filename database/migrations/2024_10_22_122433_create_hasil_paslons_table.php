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
        Schema::create('hasil_paslons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('murids');
            $table->foreignId('paslon_id')->nullable()->constrained('paslons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_paslons');
    }
};
