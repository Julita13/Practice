<?php
declare(strict_types=1);
class Divisor{

    public function __construct(private int $numberX) {

    }

    public function __invoke($number){
        $arr = [];

        for($i = 1; $i<$this->numberX; $i++){
            if(!($i % $number)) {
                $arr[] = $i;
            }
        }
        return $arr;
    }
}


$divisor = new Divisor(1000);
print_r($divisor(10));
