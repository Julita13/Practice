<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destination_operator', function (Blueprint $table) {
            $table->foreignId('operator_id')->constrained();
            $table->foreignId('destination_id')->constrained();
            $table->unique(["operator_id", "destination_id"], 'operator_id_destination_id_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destination_operator');
    }
};