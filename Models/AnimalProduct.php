<?php
class AnimalProduct
{
    use Stock;

    protected $product_name;
    protected $description;
    protected $animal_consumer;
    protected $price;
    protected $discount = 20;
    protected $quantity = 1;
    protected $available;

    function __construct(String $product_name, String $description, String $animal_consumer, Float $price, bool $available,)
    {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->animal_consumer = $animal_consumer;
        $this->price = $price;
        $this->available = $available;
    }
}
