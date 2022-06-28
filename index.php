<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. (modificato)  -->
<?php
    require_once __DIR__ . "/constructors/ProductConstructor.php";
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
        <ul>
            <?php foreach($products as $product) { ?>
                <li>
                    <p><?= $product->brand ?></p>
                    <p><?= $product->price ?></p>
                    <p><?= $product->quantity ?></p>
                    <p><?= $product->animal_type ?></p>
                    <p><?= $product->food_type ?></p>
                    <p><?= $product->expire_date ?></p>
                    <p><?= $product->toy_type ?></p>
                    <p><?= $product->size ?></p>
                </li>
            <?php } ?>
        </ul>        
    </body>
</html>