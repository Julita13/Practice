<?php
include_once __DIR__ . "/helpers.php";

class NumberCalculator
{
    public array $newArray = [];
   
    public function addNumber(int $number):void {
        $this->newArray[] = $number;
    }
    public function calculateSum():int {
        return array_sum($this->newArray);
    }
    public function calculateProduct():int {
        return array_product($this->newArray);
    }
    public function calculateAverage():int {
        return ceil($this->calculateSum() / count($this->newArray));
    }
}



$numberCalculator = new NumberCalculator();
echo $numberCalculator->calculateSum() . "\n"; // 0
$numberCalculator->addNumber(5);
$numberCalculator->addNumber(7);
// $numberCalculator->addNumber(21);
echo $numberCalculator->calculateSum(); // 12
dump($numberCalculator->calculateAverage()); // 6
dump($numberCalculator->calculateProduct()); // 35

?>