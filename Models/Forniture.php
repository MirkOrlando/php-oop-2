<?php

class Forniture extends AnimalProduct
{



    function __construct($product_name, $poster, $description, $animal_consumer, $price, $available)
    {
        parent::__construct($product_name, $poster, $description, $animal_consumer, $price, $available);
    }
}
