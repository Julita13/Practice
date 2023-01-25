<?php 

class Transport {
    public function __construct(
        public string $make,
        public string $model,
        public string $fuel,
        public string $manufactureData,
    ){}

    // public funkcijos iškart bus prieinamos Automobile klasėje
    public function getMakeModel():string {
        return "$this->make $this->model";
    }

    public function getAge():string {
        // return date_create();
        return date_diff(date_create(), date_create($this->manufactureData))->format("%y");
    }
}

$camaro = new Transport("chevrolet", "matiz", "gasoline", "2012-01-01");
print_r($camaro);

class Automobile extends Transport {
    public function __construct(
        string $make,
        string $model,
        string $fuel,
        string $manufactureData,
        public string $drive,
        public string $transmission,
        public bool $wheels,
    ){
        parent::__construct($make, $model, $fuel, $manufactureData); // šios savybės ateina iš parent klasės
    }
}

$bmw = new Automobile("bmw", "M5", "gas", "2007-01-01", "4x4", "manual", true);
print_r($bmw);
print_r($camaro->getMakeModel() . PHP_EOL);
print_r($bmw->getMakeModel() . PHP_EOL);
print_r($bmw->getAge() . PHP_EOL);

class Watercraft extends Transport{
    public function __construct(
        //transporto savybės į parent
        string $make,
        string $model,
        string $fuel,
        string $manufactureData,
        //laivo savybės
        public int $beam,
        public int $displacementDry,
        public int $displacementFullLoad,
        public bool $sails = false,
    ){
        parent::__construct($make, $model, $fuel, $manufactureData); // šios savybės ateina iš parent klasės
    }

    public function getDisplacement(): string {
        return "{$this->displacementDry} kg /{$this->displacementFullLoad} kg";
    }

    public function getAgeParent(){
        //Kreipiasi į originalą
        return parent::getAge();
    }
}

$boat = new Watercraft("Bertram", "28CC", "diesel", "2020-02-02", 297, 3856, 4536);
print_r($boat->getAge() . PHP_EOL);
print_r($boat->getMakeModel() . PHP_EOL);
print_r($boat->getDisplacement() . PHP_EOL);
print_r($boat->getAgeParent() . PHP_EOL);