<?php
    class Product {
        public $brand;
        public $price;
        public $quantity;
        public $animal_type;

        public function __construct($_brand, $_price, $_quantity, $_animal_type, $_food_type, $_expire_date, $_toy_type, $_size)
        {
            $this->brand = $_brand;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->animal_type = $_animal_type;
            $this->food_type = $_food_type;
            $this->expire_date = $_expire_date;
            $this->toy_type = $_toy_type;
            $this->size = $_size;
        }
    }
?>