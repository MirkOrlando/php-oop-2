<?php

class CatProduct extends AnimalProduct
{

    function __construct($name, $description, $price, $discount, $available)
    {
        parent::__construct($name, $description, $price, $discount, $available);
    }
}
