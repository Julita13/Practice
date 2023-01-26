<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";
class Game {

    public const MAX_RATING = 10;
    public const MIN_RATING = 1;
    public  int $testValue = 1;
    public int $randomValue = 1;

    public static bool $isTest = false;

    public function __construct(public string $name, public string $genre, public int $rating, public DateTime $date) {
        $this->checkRating();
    }

    // private function checkRating(): Game
    // {
    //     if ($this->rating > 10 || $this->rating < 1) {
    //         die("Rating must be between 1 and 10");
    //     }
    //     return $this;
    // }

    public function checkRating() {
        if($this->rating > self::MAX_RATING || $this->rating < self::MIN_RATING) {
            die("Rating must be between 1 and 10");
        }
    }
    
    public function test(): bool {
        return self::$isTest;
    }
}

//apačioje kuriama nauja funkcija, nors iš esmės tai atitinka DateTime klasę, kuri yra defaultinė.
//Tai - datos operacijos abstrakcija. 
// function dateCreate(string $date):DateTime {
//     return new DateTime("1989-05-01");
// }

// dump($date = new DateTime("1989-05-01"));
// dump(date_create("1989-05-01"));

echo Game::MAX_RATING;
//sukuriame objektą:
$mario = new Game("Super Mario", "2D Platformer", 10, date_create("1989-05-01"));


//Neras tokios statinės savybės: 
// dump(GAME::$testValue);

dump($mario);
//grąžins objekto vertę
echo($mario->testValue);


dump($mario->test());


//Statiniai kintamieji
//Sukuriamas objektas - Red Dead redemption objektas
$rdr2 = new Game("Red Dead Redemption 2", "RPG", 10, date_create("2018-01-01"));
dump ($rdr2);


//Patikrinam statinę savybę $isTest
//statinė reikšmė paimama iš klasės šablono. Objekto kurti nereikia!

Game::$isTest;
Game::$isTest = true;
dump($mario->test());

//arba galima ir per objektą: 
$rdr2::$isTest = true;
//Galima ir taip paimti, per objekto metodą:

var_dump($rdr2::$isTest);

