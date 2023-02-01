<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class Hotel {

    public function __construct(public array $data) {}

    public function __get(string $myData):mixed{
        {
            if (array_key_exists($myData, $this->data)) {
                return $this->data[$myData];
            } else {
                echo "This key does not exist";
            }
        } 
    }

    public function __set(string $myData, mixed $meaning):void {
        echo $this->data[$myData] = $meaning;
    }
};

$myHotel = [
    'name' => 'Amberton',
    'stars' => 4,
    'address' => 'Naujojo Sodo g. 1A, 92118 Klaipėda',
    'phone' => '(8-46) 404372',
    'breakfast' => true,
    'parking' => true,
    'pool' => true
];


$hotel = new Hotel($myHotel);
echo $hotel->stars.PHP_EOL;
echo $hotel->phone.PHP_EOL;
echo $hotel->address.PHP_EOL;


$hotel->stars = 5;
