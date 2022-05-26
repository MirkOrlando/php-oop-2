<?php
class AnimalProduct
{
    protected $product_name;
    protected $description;
    protected $animal_consumer;
    protected $price;
    protected $discount;
    protected $available;

    function __construct(String $product_name, String $description, String $animal_consumer, Float $price, Int $discount, bool $available,)
    {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->animal_consumer = $animal_consumer;
        $this->price = $price;
        $this->discount = $discount;
        $this->available = $available;
    }
}
