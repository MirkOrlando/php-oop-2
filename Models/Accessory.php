<?php

class Accessory extends AnimalProduct
{



    function __construct($product_name, $description, $animal_consumer, $price, $discount, $available)
    {
        parent::__construct($product_name, $description, $animal_consumer, $price, $discount, $available);
    }
}