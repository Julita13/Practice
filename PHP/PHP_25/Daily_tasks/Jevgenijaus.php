<?php

declare(strict_types=1);
class Person
{
    public function __construct(private string $name, private string $surname)
    {
    }
    public function __toString(): string
    {
        return "This person is called {$this->name} {$this->surname}";
    }
}
/*
Paredaguokite klasę Person, kad veiktų šis kodas:
*/
// $person = new Person('John', 'Smith');
// echo $person; // "This person is called John Smith";

class Divisor
{
    public function __construct(public int $divisor)
    {
    }
    public function __invoke($a)
    {
        $result = [];
        for ($i = 1; $i <= $this->divisor; $i++) {
            if (!($i % $a)) {
                $result[] = $i;
            }
        }
        return $result;
    }
}
/*
Sukurkite klasę, kuri masyvo formatu grąžintų visus skaičius nuo 1 iki X, kurie dalijasi iš tam tikro skaičiaus.
Klasė turi būti iškviečiama kaip funkcija, daliklis paduodamas kaip argumentas.
Skaičius X turi būti paduodamas per konstruktorių. Skaičius turi būti teigiamas.
[
    10,
    20,
    ...
    ]
    */
    // $divisor = new Divisor(1000);
    // print_r($divisor(10));


    /*Parašyti klasę Hotel. Ji turi konstruktorių, kuris priima private array $data - privačią savybę masyvą.
    Instancijuoti klasę ir sukurti objektą.
     Perduoti duomenų masyvą:
        ['name' => 'Amberton',
         'stars' => 4,
         'address' => 'Naujojo Sodo g. 1A, 92118 Klaipėda',
         'phone' => '(8-46) 404372',
         'breakfast' => true,
         'parking' => true,
         'pool' => true,]
     $hotel = new Hotel($data);
     Pritaikykite reikiamą magišką metodą kad suveiktų tokios operacijos:
     echo $hotel->stars;
     echo $hotel->phone;
     echo $hotel->address;
     Pritaikykite reikiamą magišką metodą kad suveiktų tokia operacija:
     $hotel->stars = 5;*/
     class Hotel
     {
        public function __construct(public array $data)
        {            
        }
        public function __get(string $value):mixed
        {
        return $this->data[$value];
        }
        public function __set($name, $value ){
        return $this->data[$name] = $value;
        }
     }
$hotel = new Hotel( ['name' => 'Amberton','stars' => 4,'address' => 'Naujojo Sodo g. 1A, 92118 Klaipėda','phone' => '(8-46) 404372','breakfast' => true,'parking' => true,'pool' => true,]);
echo $hotel->stars.PHP_EOL;
echo $hotel->phone.PHP_EOL;
echo $hotel->address.PHP_EOL;
$hotel->stars = 5;
echo $hotel->stars;