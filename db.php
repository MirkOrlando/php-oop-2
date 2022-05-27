<?php

require_once __DIR__ . '/Models/Stock.php';
require_once __DIR__ . '/Models/AnimalProduct.php';
require_once __DIR__ . '/Models/Feed.php';
require_once __DIR__ . '/Models/Forniture.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Healthcare.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Payment.php';

$data = [
    "products" => [
        new Feed('Biscottini al formaggio', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 5.99, true),
        new Feed('Mousse all\'anatra', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'gatti', 5.99, true),
        new Forniture('Albero tiragraffi', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'gatti', 29.99, true),
        new Forniture('Albero grande tiragraffi', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'gatti', 59.99, true),
        new Forniture('Cuccia morbida', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 29.99, true),
        new Forniture('Cuccia morbida comoda', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 49.99, true),
        new Accessory('Pettorina da passeggio', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 14.99, true),
        new Accessory('Guinzagluio da passeggio', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 12.99, true),
        new Healthcare('Collare antiparassitario', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'gatti', 19.99, true),
        new Healthcare('Pipetta antiparassitario', 'https://picsum.photos/100', 'Lorem ipsum dolor sit amet.', 'cani', 24.99, true),
    ],
    "user" => new User('Mario', 'Rossi'),
    "payment" => new Payment(),
];
