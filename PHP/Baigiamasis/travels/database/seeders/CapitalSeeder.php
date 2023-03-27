<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CapitalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('capitals')->delete();
        DB::table('capitals')->insert([
            [
                'capital' => 'Madrid',
                'population' => 3223334,
                'must_visit' => 'El Retiro Park',
                'time_zone' => 'UTC+1 (CET)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Washington D.C.',
                'population' => 689545,
                'must_visit' => 'Olympic National Park',
                'time_zone' => 'UTC-5 (EST)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Male',
                'population' => 133412,
                'must_visit' => 'National Museum',
                'time_zone' => 'UTC+5 (MST)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Mexico City',
                'population' => 9209944,
                'must_visit' => 'Zócalo',
                'time_zone' => 'UTC-06:00 (CST)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Wellington',
                'population' => 212000,
                'must_visit' => 'Wellington Botanic Garden',
                'time_zone' => 'UTC+12 (NZST)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Tokyo',
                'population' => 13988129,
                'must_visit' => 'Sensō-ji Temple',
                'time_zone' => 'UTC+09:00 (Japan Standard Time)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Abu Dhabi',
                'population' => 1512000,
                'must_visit' => 'Sheikh Zayed Grand Mosque, Abu Dhabi',
                'time_zone' => 'UTC+4 (UAE Standard Time)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'capital' => 'Rome',
                'population' => 2860009,
                'must_visit' => 'Colosseum',
                'time_zone' => 'UTC+1 (CET)',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
