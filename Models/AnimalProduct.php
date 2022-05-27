<?php
class AnimalProduct
{
    use Stock;

    public $product_name;
    public $poster;
    public $description;
    public $animal_consumer;
    public $price;
    public $discount = 20;
    public $quantity = 1;
    public $available;

    function __construct(String $product_name, String $poster, String $description, String $animal_consumer, Float $price, bool $available,)
    {
        $this->product_name = $product_name;
        $this->poster = $poster;
        $this->description = $description;
        $this->animal_consumer = $animal_consumer;
        $this->price = $price;
        $this->available = $available;
    }
}
