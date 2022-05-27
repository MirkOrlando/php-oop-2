<?php

require_once __DIR__ . '/Models/Quantity.php';
require_once __DIR__ . '/Models/AnimalProduct.php';
require_once __DIR__ . '/Models/Feed.php';
require_once __DIR__ . '/Models/Forniture.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Healthcare.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Payment.php';

$data = [
    "products" => [
        new Feed('Biscottini al formaggio', 'Lorem ipsum dolor sit amet.', 'cani', 5.99, true),
        new Forniture('Albero tiragraffi', 'Lorem ipsum dolor sit amet.', 'gatti', 29.99, true),
        new Accessory('Pettorina da passeggio', 'Lorem ipsum dolor sit amet.', 'cani', 14.99, true),
        new Healthcare('Collare antiparassitario', 'Lorem ipsum dolor sit amet.', 'gatto', 19.99, true),
    ],
    "user" => new User('Mario', 'Rossi'),
    "payment" => new Payment(),
];
