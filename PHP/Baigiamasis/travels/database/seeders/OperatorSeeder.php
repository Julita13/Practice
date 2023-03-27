<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('operators')->insert([
            [
                'tour_operator' => 'Novaturas',
                'address' => 'J. Jasinskio g. 16C, 01112 Vilnius',
                'email' => 'info@novaturas.lt',
                'phone_number' => 866106005,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Tez Tour',
                'address' => 'Kęstučio g. 59, 08124 Vilnius',
                'email' => 'atostogos@teztour.lt',
                'phone_number' => 852121101,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Itaka',
                'address' => 'A. Smetonos g. 7, 01115 Vilnius',
                'email' => 'info@itaka.lt',
                'phone_number' => 852444333,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Coral Travel Lithuania',
                'address' => 'Ozo g. 18, 08243 Vilnius',
                'email' => 'Keliones@coraltravel.lt',
                'phone_number' => 852747474,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Grūda',
                'address' => 'V. Kudirkos g. 2, 03104 Vilnius',
                'email' => 'info@gruda.lt',
                'phone_number' => 852150077,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Kelionių Akademija',
                'address' => 'S. Žukausko g. 35, 09129 Vilnius',
                'email' => 'vilnius@kelioniuakademija.lt',
                'phone_number' => 870011007,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'tour_operator' => 'Guliverio Kelionės',
                'address' => 'Šeimyniškių g. 17, 09312 Vilnius',
                'email' => 'vilnius@guliveriokeliones.lt',
                'phone_number' => 852660700,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
