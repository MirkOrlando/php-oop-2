<?php

require_once __DIR__ . '/Models/AnimalProduct.php';
require_once __DIR__ . '/Models/Feed.php';
require_once __DIR__ . '/Models/Forniture.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Healthcare.php';
require_once __DIR__ . '/Models/User.php';

$data = [
    "products" => [
        new Feed('Biscottini al formaggio', 'Lorem ipsum dolor sit amet.', 'cani', 5.99, 20, true),
        new Forniture('Albero tiragraffi', 'Lorem ipsum dolor sit amet.', 'gatti', 29.99, 20, true),
        new Accessory('Pettorina da passeggio', 'Lorem ipsum dolor sit amet.', 'cani', 14.99, 20, true),
        new Healthcare('Collare antiparassitario', 'Lorem ipsum dolor sit amet.', 'gatto', 19.99, 20, true),
    ],
    "users" => [
        new User('Mario', 'Rossi'),
        new User('Sofia', 'Bianchi')
    ]
];
