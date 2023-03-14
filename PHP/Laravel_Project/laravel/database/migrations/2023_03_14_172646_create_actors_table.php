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
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->date('date_of_birth');
            $table->timestamps();
            $table->softDeletes();


            // `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
            // `first_name` VARCHAR(50) NOT NULL,
            // `last_name` VARCHAR(50) NOT NULL,
            // `date_of_birth` DATE NOT NULL,
            // `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            // `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            // `deleted_at` TIMESTAMP NULL DEFAULT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
