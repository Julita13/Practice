<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageDestinationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('destination_language')->insert([
            [
                'language_id' => 1,
                'destination_id' => 1,
            ],
            [
                'language_id' => 8,
                'destination_id' => 1,
            ],
            [
                'language_id' => 2,
                'destination_id' => 2,
            ],
            [
                'language_id' => 3,
                'destination_id' => 3,
            ],
            [
                'language_id' => 1,
                'destination_id' => 4,
            ],
            [
                'language_id' => 2,
                'destination_id' => 5,
            ],
            [
                'language_id' => 4,
                'destination_id' => 5,
            ],
            [
                'language_id' => 7,
                'destination_id' => 6,
            ],
            [
                'language_id' => 5,
                'destination_id' => 7,
            ],
            [
                'language_id' => 6,
                'destination_id' => 8,
            ],
        ]);
    }
}
