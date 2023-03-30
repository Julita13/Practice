<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destination_images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('destination_id');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['name','destination_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destination_images');
    }
};
