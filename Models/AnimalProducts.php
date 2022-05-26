<?php
class AnimalProducts
{
    protected $name;
    protected $description;
    protected $price;
    protected $discount;
    protected $available;

    function __construct(String $name, String $description, Float $price, Int $discount, bool $available,)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->available = $available;
    }
}
