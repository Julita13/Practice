<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('languages')->insert([
            [
                'language' => 'Spanish',
                'abbr' => 'es',
                'language_family' => 'Indo-European',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'English',
                'abbr' => 'en',
                'language_family' => 'Indo-European',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Maldivian (dhiveni)',
                'abbr' => 'dv',
                'language_family' => 'Indo-Aryan',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Maori',
                'abbr' => 'mi',
                'language_family' => 'Malayo-Polynesian',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Arabic',
                'abbr' => 'ar',
                'language_family' => 'Semitic',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Italian',
                'abbr' => 'it',
                'language_family' => 'Indo-European',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Japanese',
                'abbr' => 'jp',
                'language_family' => 'Japonic',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'language' => 'Catalan',
                'abbr' => 'ca',
                'language_family' => 'Neo-Latin',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
