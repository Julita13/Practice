<?php
/*1. Deklarauoti klasę Product.
2. Product klasė turi 3 savybės - name - string, price - float, type - string 
3. Product klasės turi konstruktorių, kuris užpildo savybes. 
Padaryti pavyzdžius 2 būdais - įprastu ir Property Promotion.
4. Product klasė turi 3 metodus getName, getPrice, getType.
5. Visi metodai grąžina atitinkamas savybes.
6. Inicializuokite Product klasę 3 kartus ir sukurkite 3 objektus, perduokite reikiamas reikšmes.

7. Sukurti klasę Order
8. Order klasė turi savybes products - array, total - float
9. Order klasė turi metoda addProduct, kuris priima Product klasės egzempliorių - konkretų objektą.
10.addProduct() metodas įdeda produkto objektą į Order klasės savybę - Products masyvą.
11.addProduct() kviečiamas 3 kartus, kas kart perduodant skirtingą objektą
ir Order klasės savybė Products kaupia Produktų objektus.

12.Order klasė turi metodą total(), kuris suskaičiuoja ir grąžiną visų priduktų kainų sumą
13.Inicializuokite Order klasę.
14.Pridėkite 3 produktus.
15 Išveskite total vertę.*/

// class Product{
//     public string $name;
//     public float $price;
//     public string $type;

//     public function __construct(string $name, float $price, string $type){
//         $this->name=$name;
//         $this->price=$price;
//         $this->type=$type;
//     }
// }

class Product{

    public function __construct(private string $name, private float $price, private string $type){

    }

    public function getName():string {
        return $this->name;
    } 
    
    public function getPrice(): float{
        return $this->price;
    } 

    public function getType():string {
        return $this->type;
    } 
}

class Order{
    public array $products = [];
    public float $total;

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function total(){
        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->getPrice();
        }
        return $sum;
    }
}

$sofa = new Product('Sofa', 890, 'baldas');
$dviratis = new Product('Vairas', 500, 'triratis');
$telefonas = new Product('Nokia', 50, '3310');
$iphone = new Product('iPhone', 1400, '14');


// print_r($sofa->getPrice());
// print_r($dviratis->getName());
// print_r($telefonas->getType());

$order = new Order();
$order->addProduct($sofa);
$order->addProduct($dviratis);
$order->addProduct($telefonas);
$order->addProduct($iphone);


// print_r($order);
print_r($order->total());

?>