<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destination_language', function (Blueprint $table) {
            $table->foreignId('language_id')->constrained();
            $table->foreignId('destination_id')->constrained();
            $table->unique(["language_id", "destination_id"], 'language_id_destination_id_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destination_language');
    }
};