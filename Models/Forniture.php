<?php

class Forniture extends AnimalProduct
{



    function __construct($product_name, $description, $animal_consumer, $price, $available)
    {
        parent::__construct($product_name, $description, $animal_consumer, $price, $available);
    }
}
