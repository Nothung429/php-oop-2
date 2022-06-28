<?php
    require_once __DIR__ . "/Product.php";
    class AnimalFood extends Product {
        public $food_type;
        public $expire_date;

        public function __construct($_food_type, $_expire_date)
        {
            $this->food_type = $_food_type;
            $this->expire_date = $_expire_date;
        }
    }
?>