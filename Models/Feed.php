<?php

class Feed extends AnimalProduct
{

    function __construct($product_name, $description, $price, $discount, $available)
    {
        parent::__construct($product_name, $description, $price, $discount, $available);
    }
}
