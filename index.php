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

require_once __DIR__ . '/Models/AnimalProduct.php';
require_once __DIR__ . '/Models/Feed.php';
require_once __DIR__ . '/Models/Forniture.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Healthcare.php';
require_once __DIR__ . '/Models/User.php';


$dry_food = new Feed('Biscottini al formaggio', 'Lorem ipsum dolor sit amet.', 'cani', 5.99, 20, true);
$scratcher = new Forniture('Albero tiragraffi', 'Lorem ipsum dolor sit amet.', 'gatti', 29.99, 20, true);
$harness = new Accessory('Pettorina da passeggio', 'Lorem ipsum dolor sit amet.', 'cani', 14.99, 20, true);
$pesticide = new Healthcare('Collare antiparassitario', 'Lorem ipsum dolor sit amet.', 'gatto', 19.99, 20, true);

$user1 = new User('Mario', 'Rossi');
$user1Name = $user1->getName;
$user1->signIn('email@example.it', 'password2022', $user1Name);
$user2 = new User('Sofia', 'Bianchi');


var_dump($dry_food);
var_dump($scratcher);
var_dump($harness);
var_dump($pesticide);
var_dump($user1);
var_dump($user2);
