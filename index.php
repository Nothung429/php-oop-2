<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta  -->
<?php
    require_once __DIR__ . "/constructors/ProductConstructor.php";
    require_once __DIR__ . "/constructors/UserConstructor.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Animal Shop</h1>
        <hr>
        <h2>Products</h2>
        <ul>
            <?php foreach($Products as $product) { ?>
                <li>
                    <span><strong>Brand:</strong> <?= $product->brand ?>|-----|</span>
                    <span><strong>Price:</strong> <?= $product->price ?>|-----|</span>
                    <span><strong>Quantity:</strong> <?= $product->quantity ?>|-----|</span>
                    <span><strong>Animal Type:</strong> <?= $product->animal_type ?>|-----|</span>
                    <?php foreach($FoodProducts as $FoodProduct) { ?>
                        <span><strong>Food Type:</strong> <?= $FoodProduct->food_type ?>|-----|</span>
                        <span><strong>Expire Date:</strong> <?= $FoodProduct->expire_date ?></span>
                    <?php } ?>
                </li>
            <?php } ?>
            <hr>
            <?php foreach($Products as $product) { ?>
                <li>
                    <span><strong>Brand:</strong> <?= $product->brand ?>|-----|</span>
                    <span><strong>Price:</strong> <?= $product->price ?>|-----|</span>
                    <span><strong>Quantity:</strong> <?= $product->quantity ?>|-----|</span>
                    <span><strong>Animal Type:</strong> <?= $product->animal_type ?>|-----|</span>
                    <?php foreach($ToyProducts as $ToyProduct) { ?>
                        <span><strong>Toy Type:</strong> <?= $ToyProduct->toy_type ?>|-----|</span>
                        <span><strong>Size:</strong> <?= $ToyProduct->size ?></span>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
        <hr>
        <h2>User</h2>
        <ul>
            <?php foreach($users as $user) { ?>
                <li>
                    <p><strong>User:</strong> <?= $user->getFullName() ?></p>
                    <p><strong>Email:</strong> <?= $user->email ?></p>
                    <hr>
                    <?php foreach($creditcards as $creditcard) { ?>
                        <p><strong>Card User:</strong> <?= $creditcard->getCardFullName() ?></p>
                        <p><strong>Card Number:</strong> <?= $creditcard->card_number ?></p>
                        <p><strong>Card Brand:</strong> <?= $creditcard->card_brand ?></p>
                        <p><strong>Card Expire:</strong> <?= $creditcard->card_expire ?></p>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>