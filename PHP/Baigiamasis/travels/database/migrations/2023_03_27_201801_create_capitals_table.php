<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('capitals', function (Blueprint $table) {
            $table->id();

            $table->string('capital', 50);
            $table->integer('population');
            $table->string('must_visit', 255);
            $table->string('time_zone', 100);

            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('capitals');
    }
};
