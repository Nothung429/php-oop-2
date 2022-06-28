<?php
    class Product {
        public $brand;
        public $price;
        public $quantity;
        public $animal_type;
        public $discount = 0;

        public function __construct($_brand, $_price, $_quantity, $_animal_type)
        {
            $this->brand = $_brand;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->animal_type = $_animal_type;
        }
    }
?>