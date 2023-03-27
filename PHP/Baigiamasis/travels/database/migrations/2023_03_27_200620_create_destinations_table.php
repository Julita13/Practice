<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();

            $table->string('destination', 50);
            $table->text('description');
            $table->string('capital', 50);
            $table->integer('population');
            $table->string('currency', 50);
            $table->string('image', 1000);

            $table->timestamps();
            $table->softDeletes();

        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
