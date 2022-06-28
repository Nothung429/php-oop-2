<?php
    require_once __DIR__ . "/../classes/User.php";
    require_once __DIR__ . "/../classes/CreditCard.php";
    
    $users = [
        new user ("pino", "insegno", "pino@gmail.com"),
    ];

    $creditcards = [
        new CreditCard (123456789 , "PINO", "INSEGNO", "MASTERCARD", 2027),
    ];
?>