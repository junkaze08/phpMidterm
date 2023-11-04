<?php
class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotalPrice() {
        return $this->price * $this->quantity;
    }

    public function addToStock($quantity) {
        $this->quantity += $quantity;
    }

    public function sell($quantity) {
        if ($quantity <= $this->quantity) {
            $this->quantity -= $quantity;
            return true;
        } else {
            return "Insufficient stock";
        }
    }
}


$product = new Product("Widget", 10.99, 50);
echo "Total Price: $" . $product->getTotalPrice() . "\n"; 
$product->addToStock(25);
echo "Updated Stock: " . $product->quantity . "\n"; 
$result = $product->sell(30);

if ($result === true) {
    echo "Sale successful!\n";
    echo "Updated Stock: " . $product->quantity . "\n"; 
} else {
    echo "Sale failed. " . $result . "\n";
}

?>
