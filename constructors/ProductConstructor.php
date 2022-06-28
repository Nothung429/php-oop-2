<?php
    require_once __DIR__ . "/../classes/Product.php";
    require_once __DIR__ . "/../classes/AnimalFood.php";
    require_once __DIR__ . "/../classes/AnimalToy.php";

    $Products = [
        new product ("pedigree", 12, 56, "cat"),
        new product ("purina", 13, 56, "dog"),
        new product ("purina", 14, 56, "dog"),
        new product ("purina", 15, 56, "cat"),
        new product ("pedigree", 16, 56, "rabbit"),
        new product ("pedigree", 17, 56, "rabbit"),
    ];

    $FoodProducts = [
        new AnimalFood ("croquettes", "22/06/2023"),
    ];

    $ToyProducts = [
        new AnimalToy ("chewable", "big"),
    ];
?>