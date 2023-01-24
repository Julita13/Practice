<?php 
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

/*
Sukurkite programą skirtą valdyti parkingą. Naudokite objektinį programavimą t.y. klases.
Turbūt pakaks dviejų klasių - Parking ir Car. Duomenys turi būti saugomi faile.
---------------------------------------------
php -f parking.php parkCar NKA_123
Car ABC_123 parked!
---------------------------------------------
php -f parking.php parkCar FTA_122
Car FTA_122 parked!
---------------------------------------------
php -f parking.php list_cars
Parked cars:
NKA_123
FTA_122
*/


class Car {
    public function __construct(private string $carNumber) {}

    public function getCarNumber():string {
        return $this->carNumber;
    }
}
class Parking
{
    // public array $parkedCars = [];
    public function __construct(public Car $car)
    {

    }

    public function parkCar()
    {   $this->addCar($this->car->getCarNumber());
        return "Car {$this->car->getCarNumber()} is parked!";
    }

    public function addCar($carNumber)
    {
        $filePath = __DIR__ . "/car_list.json";
        $decodeJson = [];
        if (file_exists($filePath)) {
            $json = file_get_contents($filePath);
            $decodeJson = json_decode($json, true);
        }
        $decodeJson[] = $carNumber;
        file_put_contents($filePath, json_encode($decodeJson));
    }
}

dump($argv[2]);
$car = new Car($argv[2]);
$parkedCar = new Parking($car);
// $parkedCar->parkCar();
$method = $argv[1];
echo $parkedCar->$method();
// dump($argv);



