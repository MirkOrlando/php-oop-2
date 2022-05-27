<?php
trait Quantity
{
    protected $quantity;

    public function setNewSupply($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
