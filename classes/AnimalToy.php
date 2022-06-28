<?php
    require_once __DIR__ . "/Product.php";
    class AnimalToy extends Product {
        public $toy_type;
        public $size;

        public function __construct($_toy_type, $_size)
        {
            $this->toy_type = $_toy_type;
            $this->size = $_size;
        }
    }
?>