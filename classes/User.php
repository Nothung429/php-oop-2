<?php
    class User {
        public $name;
        public $surname;
        public $email;

        public function __construct($_name, $_surname, $_email, $_card_number, $_card_name, $_card_surname, $_card_brand, $_card_expire)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->card_number = $_card_number;
            $this->card_name = $_card_name;
            $this->card_surname = $_card_surname;
            $this->card_brand = $_card_brand;
            $this->card_expire = $_card_expire;
        }
    }
?>