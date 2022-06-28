<?php
    class CreditCard extends User {
        public $card_number;
        public $card_name;
        public $card_surname;
        public $card_brand;
        public $card_expire;
        public $card_valid = false;

        public function __construct($_card_number, $_card_name, $_card_surname, $_card_brand, $_card_expire) {
            $this->card_number = $_card_number;
            $this->card_name = $_card_name;
            $this->card_surname = $_card_surname;
            $this->card_brand = $_card_brand;
            $this->card_expire = $_card_expire;

            if($this->card_expire > 2022) {
                $this->card_valid = true;
                echo "Valid Card";
            } else {
                echo "Invalid Card";
            }
        }
        public function getCardFullName(): string {
            return "{$this->card_name} {$this->card_surname}";
        }
    }
?>