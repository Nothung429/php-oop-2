<?php
    class User {
        public $name;
        public $surname;
        public $email;
        public $registered = false;

        public function __construct($_name, $_surname, $_email)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;

            if($this->email == "pino@gmail.com") {
                $this->registered = true;
                echo "Welcome Back!";                
            } else {
                echo "Register Here!";
            }
        }
        public function getFullName(): string {
            return "{$this->name} {$this->surname}";
        }
    }
?>