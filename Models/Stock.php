<?php
trait Stock
{
    protected $stock_quantity = 100;

    public function setNewSupply($stock_quantity)
    {
        if (!is_int($stock_quantity)) {
            throw new Exception("is not a number integer");
        }
        $this->stock_quantity += $stock_quantity;
    }

    public function getStockQuantity()
    {
        return $this->stock_quantity;
    }
}
