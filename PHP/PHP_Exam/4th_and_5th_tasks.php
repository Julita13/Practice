<?php 
include_once __DIR__ . "/helpers.php";

//4 UŽDUOTIS: SPRENDIMAS

class Product {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getPrice():int
    {
        return $this->price;
    }
};

//Instancijuojame klasę 2 kartus: 
$snicker = new Product('Snickers', 80);
$icecream = new Product('Ben & Jerry', 100);

// Išvedame produktų vertes bei kainas: 
echo($snicker->getName() . " - ");
echo($snicker->getPrice() ."ct," ."\n");

echo($icecream->getName() . " - ");
echo($icecream->getPrice() ."ct"."\n");


// 5 UŽDUOTIS: SPRENDIMAS

class Order
{
    public const VAT = 21;
    protected array $products = [];
    protected int|float $total = 0;

    public function __construct() {
    }
    
    public function getTotal(): int|float
    {
        $finalResult = round($this->total/100, 2);
        return $finalResult;
    }

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
        $this->updateTotal();
        return $this;
    }

    private function updateTotal():self
    {
        $sumOfProducts = 0; 
        foreach($this->products as $product){
            $sumOfProducts += $product->getPrice();
        }
        $this->total = $sumOfProducts + $this->getVat($sumOfProducts);
        return $this;
    }

    private function getVat(int $price): int|float
    {
        $vat = (self::VAT * $price) /100; 
        return $vat;
    }
};

$order = new Order();
$total = $order->addProduct($icecream)->addProduct($snicker)->getTotal();
dump($total  . " Eur");

?>