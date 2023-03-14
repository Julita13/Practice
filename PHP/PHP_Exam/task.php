<?php
include __DIR__ . '/vendor/autoload.php';
/*
1.
Sukurti funkciją $booksAuthors, kuri priima parametrus - masyvą books ir masyvą authors;
Naudodami abu masyvus ir jų indeksus, grąžinti naują, asocijuotą masyvą,
kurio raktai yra $authors, o vertės - $books.
Poruojama pagal indeksus
*/
function booksAuthors(array $authors, array $books): array
{
    return [];
}

$authors = ['Odisėja', 'Drakula', 'Žiedų valdovas', 'Oliveris Tvistas', 'Moby-Dick', 'Marsietis'];
$books = ['Homer', 'Bram Stoker', 'J. R. R. Tolkien', 'Charles Dickens', 'Herman Melville', 'Andy Weir'];

dump(booksAuthors($authors, $books));
// Rezultatas:
// [
//   "Odisėja" => "Homer"
//   "Drakula" => "Bram Stoker"
//   "Žiedų valdovas" => "J. R. R. Tolkien"
//   "Oliveris Tvistas" => "Charles Dickens"
//   "Moby-Dick" => "Herman Melville"
//   "Marsietis" => "Andy Weir"
// ]

/*
2.
 
Parašyti funkciją, kuri priima 2 parametrus - sveikus skaičius nuo x iki y.
Funkcija, naudodama ciklą, grąžina visų tarpinių sveikųjų skaičių sumą nuo x iki y
Pakviesti funkciją, parduoti jai skaičius nuo  1 iki 100.

*/

function getSumOfAllNumbers($from, $to): int
{
    return 0;
}

dump(getSumOfAllNumbers(1, 100));

// Rezultatas: 5050

/*
3.
 
Parašyti funkciją, kuri priima string parametrą.
Funkcija pašalina balses iš teksto ir grąžina rezultatą - string.

*/

function vowelChange($subject): string
{
    return '';
}

dump(vowelChange('Mykolas bėga per pievą'));
// "Mkls bg pr pv"

/*
4.
 
Parašyti klasę Product, kuri turi 2 private savybes $name ir $price.
Šios savybės užpildomos konstruktoriuje
Klasė taip pat turi 2 metodus getName ir getPrice, kuriuos pakvietus grąžinamos
savybės name ir price vertės.
Instancijuoti klasę Product 2 kartus ir sukurti 2 objektus:
1 - name Snicker, price 80
2 - name Ledai, price 100
kaina centais

Išvesti abiejų produktų kainas ir vertęs.

*/

class Product
{
}

$snicker = new Product('Snickers', 80);
$chips = new Product('San Diego', 100);

/*
5.
 
Parašyti klasę Order, kuri turi 2 protected savybes - array $products, int|float $total ir konstantą VAT = 21.
Klasė taip pat turi 4 metodus addProduct(), getTotal(), calculateTotal(), addVat().
addProduct() - į $products masyvą-savybę pridedamas produktas (Product klasės objektas). Produktų gali būti daug.
Kas kart įdėjus naują produktą, kviečiamas updateTotal() metodas, kuris atnaujina $total savybės vertę -
bendrą $products vertę su PVM.
PVM suma paskaičiuojama naudojant getVat() metodą.
Paskutinis pakviečiamas metodas getTotal(), kuris suapvalina ir grąžina visą produktų sumą Eurais su PVM .
*/


class Order
{
    public const VAT = 21;

    protected array $products = [];

    protected int|float $total = 0;

    public function __construct() {
    }

    public function getTotal(): int
    {
        return 0;
    }

    public function addProduct(Product $product): self
    {
        return $this;
    }

    private function updateTotal(): self
    {
        return $this;
    }

    private function getVat(int $price): int|float
    {
        return 0;
    }
}


$order = new Order();
$total = $order->addProduct($icecream)->addProduct($snickers)->getTotal();
dump($total);

// Rezultatas:80cnt + 100cnt + pvm = 2,18 Eur

/*
6.
 
Parašyti MYSQL scriptą kuriuo sukuriama lentelė USERS su šiais stulpeliais:
id,
first_name,
last_name
date_of_birth,
created_at,
updated_at,
deleted_at
*/

/*
7.
Parašyti sql scriptą, kuriuo sukuriama lentelė WORKPLACES
id,
name,
created_at,
updated_at,
deleted_at


Parašyti MYSQL scriptą, kuriuo papildoma lentelė USERS šiuo stulpeliu:

workplace_id int unsigned not null - foreign key constraint to table workplaces

Sukuriamas one-to-many ryšys tarp USERS ir WORKPLACES
*/

/*
8.
Parašyti MYSQL scriptą, kuriuo paimami visi USERIAI su jiems priklausomais WORKPLACES
*/

