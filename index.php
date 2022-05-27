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

var_dump($data);
