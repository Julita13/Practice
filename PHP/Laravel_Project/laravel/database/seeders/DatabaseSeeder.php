<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ActorSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\GenreMovieSeeder;
use Database\Seeders\LanguageMovieSeeder;
use Database\Seeders\CountryMovieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            UserSeeder::class,
            ActorSeeder::class,
            LanguageSeeder::class,
            GenreSeeder::class,
            CountrySeeder::class,
            GenreMovieSeeder::class,
            LanguageMovieSeeder::class,
            CountryMovieSeeder::class,
        ]);
    }
}
