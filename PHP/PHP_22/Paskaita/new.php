<?php
declare(strict_types=1);


// php -f new.php parkCar GAK_078

class Car 
{
    private string $carPlate; 
    public function __construct(string $plate) {
        $this->carPlate = $plate; 
    }

    public function getCarPlate(): string {
        return $this->carPlate; 
    }
}


$car = new Car($argv[2]);


class Parking {
    private Car $car; 
    private $carFile= __DIR__."/parked_cars.txt";
    public function __construct(Car $carObject) {
        $this->car = $carObject; 
    }
    public function getCar(): Car {
        return $this->car;
    }

    public function parkCar(){
        $plate = $this->car->getCarPlate();
        $this->insertCar($plate);
    }

    private function insertCar(string $plate) {
        $contents = " "; 
        if(file_exists($this->carFile)) {
            $contents = file_get_contents($this->carFile);
            $contents .= " ";
    }

    $contents .= "{$plate}";

    file_put_contents($this->carFile, $contents);
}
}


$parking = new Parking($car);
// $parking->parkCar();
$methodName = $argv[1];
$parking->$methodName();