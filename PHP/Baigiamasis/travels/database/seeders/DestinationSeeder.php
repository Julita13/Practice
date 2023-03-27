<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('destinations')->delete();
        DB::table('destinations')->insert([
            [
                'destination' => 'Spain',
                'description' => 'Spain, a country on Europe’s Iberian Peninsula, includes 17 autonomous regions with diverse geography and cultures. Capital city Madrid is home to the Royal Palace and Prado museum, housing works by European masters. ',
                'capital' => 'Madrid',
                'population' => 47325360,
                'currency' => 'Euro (€)',
                'image' => 'https://cdn.cnn.com/cnnnext/dam/assets/170706113411-spain.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'United States of America',
                'description' => 'The U.S. is a country of 50 states covering a vast swath of North America, with Alaska in the northwest and Hawaii extending the nation’s presence into the Pacific Ocean. Major Atlantic Coast cities are New York, a global finance and culture center, and capital Washington, DC.',
                'capital' => 'Washington D.C.',
                'population' => 333287557,
                'currency' => 'U.S. dollar ($)',
                'image' => 'https://www.nationsencyclopedia.com/photos/united-states-of-america-1087.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'Maldives',
                'description' => 'The Maldives, officially the Republic of Maldives, is an archipelagic state in South Asia, situated in the Indian Ocean. It lies southwest of Sri Lanka and India, about 750 kilometres from the Asian continents mainland.',
                'capital' => 'Male',
                'population' => 579330,
                'currency' => 'Maldivian rufiyaa (MVR)',
                'image' => 'https://cdn.cnn.com/cnnnext/dam/assets/200512103822-maldives-bungalow-aerial.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'Mexico',
                'description' => 'Mexico, officially the United Mexican States, is a country in the southern portion of North America. It is bordered to the north by the United States; to the south and west by the Pacific Ocean; to the southeast by Guatemala, Belize, and the Caribbean Sea; and to the east by the Gulf of Mexico',
                'capital' => 'Mexico City',
                'population' => 129150971,
                'currency' => 'Mexican peso (MXN)',
                'image' => 'https://i.natgeofe.com/n/6c02ad5a-977b-4f12-b9c0-02ffb0736e07/metropolitan-cathedral-zocalo-mexico-city_16x9.JPG',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'New Zealand',
                'description' => 'New Zealand is an island country in the southwestern Pacific Ocean. It consists of two main landmasses—the North Island and the South Island —and over 700 smaller islands. It is the sixth-largest island country by area',
                'capital' => 'Wellington',
                'population' => 5160360,
                'currency' => 'New Zealand dollar ($)',
                'image' => 'https://s30876.pcdn.co/wp-content/uploads/New-Zealand.jpg.optimal.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'Japan',
                'description' => 'Japan is an island country in East Asia. It is situated in the northwest Pacific Ocean and is bordered on the west by the Sea of Japan, extending from the Sea of Okhotsk in the north toward the East China Sea, Philippine Sea, and Taiwan in the south.',
                'capital' => 'Tokyo',
                'population' => 124840000,
                'currency' => 'Japanese yen (¥)',
                'image' => 'https://lp-cms-production.imgix.net/2023-02/shutterstock_776445706.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'United Arab Emirates',
                'description' => 'The United Arab Emirates, or simply the Emirates, is a country in Western Asia. It is located at the eastern end of the Arabian Peninsula and shares borders with Oman and Saudi Arabia, while having maritime borders in the Persian Gulf with Qatar and Iran.',
                'capital' => 'Abu Dhabi',
                'population' => 9282410,
                'currency' => 'UAE dirham (AED)',
                'image' => 'https://www.expatica.com/app/uploads/sites/15/2019/11/united-arab-emirates-1920x1080.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'destination' => 'Italy',
                'description' => 'Italy, a European country with a long Mediterranean coastline, has left a powerful mark on Western culture and cuisine. Its capital, Rome, is home to the Vatican as well as landmark art and ancient ruins. ',
                'capital' => 'Rome',
                'population' => 5885348,
                'currency' => 'Euro (€) ',
                'image' => 'https://cdn.britannica.com/82/195482-050-2373E635/Amalfi-Italy.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],

        ]);
    }
}
