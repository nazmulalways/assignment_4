<?php 
class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getFormattedPrice() {
        return (string) $this->price;
    }
    
    public function showDetails() {
        echo "Product Details:".PHP_EOL;
        echo '- ID: ' . $this->getId() . PHP_EOL;
        echo '- Name: ' . $this->getName() . PHP_EOL;
        echo '- Price: $' . $this->getFormattedPrice() . PHP_EOL;
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();





?>