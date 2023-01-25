<?php 
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

// class Product2
// {
//     public string $name;
//     public float $price;
//     public string $type;

//     public function __construct(string $name, float $price, string $type) {
//         $this->name = $name;
//         $this->price = $price;
//         $this->type = $type;
//     }
// }

class Product {
   
    public function __construct(public string $name, public float $price, public string $type){}
    
    public function getName():string {
        return $this->name;
    }
    public function getPrice():float {
        return $this->price;
    }
    public function getType():string {
        return $this->type;
    }
}

class Order {
    public array $products = [];
    public float $total;

    public function addProduct(Product $myProduct) {
        $this->products[] = $myProduct;
         
    }

public function total() {
    $sum = 0;
    foreach($this->products as $product) {
        $sum += $product->getPrice(); 
    }
    return $sum;
}
}


$phone = new Product("Iphone", 1099.99, "mobile");
$car = new Product("Tesla", 49999.99, "electrocar");
$laptop = new Product("Apple", 2999.99, "pc");
$book = new Product("Harry Potter", 14.99, "literature");
dump($car->getPrice()); 
dump($phone->getPrice()); 
dump($laptop->getPrice()); 
dump($book->getPrice()); 

$myOrder = new Order();
$myOrder->addProduct($phone);
$myOrder->addProduct($car);
$myOrder->addProduct($laptop);
$myOrder->addProduct($book);
dump($myOrder);
dump($myOrder->total());