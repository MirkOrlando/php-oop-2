<?php
/*
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, 
anche giochi, cucce, etc. 

L'utente potrà sia comprare i 
prodotti senza registrarsi, oppure 
iscriversi e ricevere il 20% di 
sconto su tutti i prodotti. 

Il pagamento avviene con la carta di credito, 
che non deve essere scaduta.

BONUS: Alcuni prodotti (es. antipulci) avranno la 
caratteristica che saranno disponibili solo in un periodo 
particolare (es. da maggio ad agosto).
*/

require_once __DIR__ . '/db.php';
//Europe/Rome
date_default_timezone_set('Europe/Rome');
$user = $data['user'];
$products = $data['products'];
$pay = $data['payment'];

$user->signIn('example@test.it', 'password2022');
$user->setCreditCard('000000000000', '123',  8,  2026);

var_dump($pay->isCreditCardExpired($user));

try {
    $products['0']->setNewSupply('ciao');
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}

//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- Bootstrap CSS v5.1.3 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <style>
        body {
            background-color: bisque;
        }
    </style>
</head>

<body>
    <!--     <header>
        <nav class="text-light bg-dark">
            <div class="container">
                <div class="row">
                    <h3>Pet Shop</h3>
                </div>
            </div>
        </nav>
    </header> -->

    <main>
        <div class="container">
            <div class="row row-cols-5 g-3">
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?= $product->poster ?>" alt="img <?= $product->product_name ?>">
                            <div class="card-body pb-2">
                                <h5 class="card-title"><?= $product->product_name ?></h5>
                                <p class="card-text"><?= $product->description ?></p>
                            </div>
                            <div class="price p-3 pt-0 text-center">€ <?= number_format($product->price, 2, ',', '.') ?></div>
                            <form action="post" class="d-flex justify-content-around px-3">
                                <input class="w-100" type="number" min="1" max="<?= $product->getStockQuantity() ?>" value="1">
                                <button class="btn btn-secondary">Add</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <footer class="text-center py-3">
        Copyright &copy;
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

</body>

</html>