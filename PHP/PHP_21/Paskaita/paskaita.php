<?
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";
// Kuomet objektas yra perduodamas į metodą kaip argumentas, jis bus perduodamas by reference. Tai reiškia, kad priimantysis metodas gaus patį objektą, o ne jo kopiją. 
// Šiuo atveju objektai veikia kitaip nei paprastieji tipai (int, string, array), kurie yra perduodami "by value" - perduodama jš kopija. 

class Number {
    public function __construct(
        protected int|float $number
        ) {} 
    public function getNumber(): int|float{
        return $this->number;
    }
    public function type():string {
        return gettype($this->number);
    }
}


class Result {
    public function __construct(
        protected mixed $result,
        protected int $status = 1,
        ){}
        public function getResult(): mixed{
            return $this -> result;
        }
}

class Calculator {
    public function addNumbers(Number $a, Number $b): Result {
    
        $sum = $a->getNumber() + $b->getNumber();
        return new Result($sum);
    }
}

$calculator = new Calculator();

$number1 = new Number(6);
$number2 = new Number(7); 

dd($calculator->addNumbers($number1, $number2)->getResult());