<?php
class AnimalProduct
{
    protected $product_name;
    protected $description;
    protected $price;
    protected $discount;
    protected $available;

    function __construct(String $product_name, String $description, Float $price, Int $discount, bool $available,)
    {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->available = $available;
    }
}
