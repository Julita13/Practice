<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperatorDestinationSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('destination_operator')->insert([
            [
                'operator_id' => 3,
                'destination_id' => 1,
            ],
            [
                'operator_id' => 2,
                'destination_id' => 1,
            ],
            [
                'operator_id' => 1,
                'destination_id' => 2,
            ],
            [
                'operator_id' => 1,
                'destination_id' => 3,
            ],
            [
                'operator_id' => 7,
                'destination_id' => 3,
            ],
            [
                'operator_id' => 6,
                'destination_id' => 3,
            ],
            [
                'operator_id' => 4,
                'destination_id' => 4,
            ],
            [
                'operator_id' => 5,
                'destination_id' => 5,
            ],
            [
                'operator_id' => 6,
                'destination_id' => 5,
            ],
            [
                'operator_id' => 1,
                'destination_id' => 6,
            ],
            [
                'operator_id' => 6,
                'destination_id' => 6,
            ],
            [
                'operator_id' => 2,
                'destination_id' => 7,
            ],
            [
                'operator_id' => 3,
                'destination_id' => 8,
            ],
            [
                'operator_id' => 4,
                'destination_id' => 8,
            ],
        ]);
    }
}
