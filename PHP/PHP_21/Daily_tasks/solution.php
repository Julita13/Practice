<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class Customer {
    public function __construct(public string $name, public string $surname, public string $level) {

    }

    public function getFullName():string {
        return $this->name . " " . $this->surname;
    }

    public function getLevel(): string {
        return $this->level;
    }
}

class CartItem {
    public function __construct(public string $name, public int $price, public int $quantity) {}

    public function getName():string {
        return $this->name;
    }
    public function getPrice(): int|float {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }
}

class CartDiscount {
    public function __construct(public int $percent, public string $customerLevel) {}

    public function getDiscountPercent(): int|float {
        return $this->percent;
    }

    public function getCustomerLevel():string {
        return $this->customerLevel;
    }
}
class Cart {
    public array $items = [];
    public array $discounts = [];
    public function __construct(public Customer $customer) {}

    public function addItem(CartItem $cartItem): self {
        $this->items[] = $cartItem;
        return $this;
    }

    public function addDiscount(CartDiscount $cartDiscount):self{
        $this->discounts[] = $cartDiscount;
        return $this;
    }
    

    public function getTotal(): int|float {
        // var_dump($this->items);
        // var_dump($this->discounts);
        $subTotal = array_reduce($this->items, function($acc, $item) {
            $acc += $item->getPrice() * $item->getQuantity();
            return $acc;
        }, 0);
        $discount = array_reduce($this->discounts, function($acc, $discount) {
            if($discount->getCustomerLevel() === $this->customer->getLevel()) {
                $acc += $discount->getDiscountPercent();
            }
            return $acc;
        });
        return $subTotal * (100 - $discount) / 100;
    }

    public function printSummary() {

    }
}








$customer = new Customer('John', 'Smith', 'A');
$cart = new Cart($customer);
$iphone = new CartItem('Iphone 13', 1300, 1);
$airpods = new CartItem('Airpods Pro', 200, 2);

$cart->addItem($iphone)->addItem($airpods);

$cartDiscount1 = new CartDiscount(15, 'A');
$cart->addDiscount($cartDiscount1);

$cartDiscount2 = new CartDiscount(2, 'A');
$cart->addDiscount($cartDiscount2);

$cartDiscount3 = new CartDiscount(20, 'B');
$cart->addDiscount($cartDiscount2);

$total = $cart->getTotal();
var_dump($total);
// var_dump($total); // 1249.5
// $cart->printSummary();

dd($cart);