<?php
include_once __DIR__ . "/helpers.php";

class Fruit {
    public string $name;
    public string $color;
    public string $taste;
    public string $kind;
    public string $origin;
    public string $shape;

    public function __construct(string $name, string $color, string $taste, string $kind, string $origin, string $shape) {
        $this->name = $name;
        $this->color = $color;
        $this->taste = $taste;
        $this->kind = $kind;
        $this->origin = $origin;
        $this->shape = $shape;
    }

    public function printReview(string $review) {
        if($review === "good"){
           return "This $this->color $this->name from $this->origin is great!";
        }elseif($review === "bad"){
           return "This $this->color $this->name from $this->origin sucks!";
        }else {
            return "This $this->name is meh";
        }
    }
    public function colorShape(){
        return $this-> name . " is " . $this->color . " and " . $this->shape;
    }
}
;


//Dinamiškai sukurti savybių nepatartina. 
// $orange->surname = "Oranžerijus";

$apple = new Fruit("apple", "green", "sweet", "Jonagold", "LT", "round");
$orange = new Fruit("orange", "orange", "sweet/sour", "Rimiakinis", "Spain", "round");
$kiwi = new Fruit("kiwi", "green", "tasty", "hairy", "Ecuador", "round");
dump($apple);
dump($orange);
dump($apple->colorShape());
dump($kiwi->printReview("bad"));
dump($orange);

// Property promotion

class Animal{
    //Padaromas savybių apibrėžimas ir verčių priskyrimas
    public function __construct(
        public string $name, 
        public string $color, 
        public string $taste, 
        public string $kind, 
        public string $origin, 
        public string $shape) {
        
    }
}
$horse = new Animal("horse", "black", "exotic", "Arabian horse", "Spain", "none");
dump($horse);