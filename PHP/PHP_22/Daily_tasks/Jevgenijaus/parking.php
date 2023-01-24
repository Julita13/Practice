<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

/*
Sukurkite programą skirtą valdyti parkingą. Naudokite objektinį programavimą t.y. klases.
Turbūt pakaks dviejų klasių - Parking ir Car. Duomenys turi būti saugomi faile.
---------------------------------------------
php -f parking.php parkedCar NKA_123
Car ABC_123 parked!
---------------------------------------------
php -f parking.php parkedCar FTA_122
Car FTA_122 parked!
---------------------------------------------
php -f parking.php list_cars
Parked cars:
NKA_123
FTA_122
*/


class Car{
    public function __construct(private string $carPlate )
    {      
    } 
    public function getCarPlate(): string {
        return $this->carPlate;
    }
}
class Parking{
    public function __construct(public Car $car)
    {
    }
    public function parkedCar(){
        $this->insertCar($this->car->getCarPlate());
        return "Car {$this->car->getCarPlate()} is parked !";
    }
    public function insertCar($carPlate){
        $filePath = __DIR__."/car_list.json";
        $decodeJson = [];
        if(file_exists($filePath)){
            $json = file_get_contents($filePath);
            $decodeJson = json_decode($json, true);
        }
        $decodeJson[] = $carPlate;
        file_put_contents($filePath, json_encode($decodeJson));
    }
}
print_r($argv);die();
$car = new Car($argv[2]);
$parked = new Parking($car);
$method = $argv[1];
print_r($argv[2]);
// echo $parked->$method();
?>