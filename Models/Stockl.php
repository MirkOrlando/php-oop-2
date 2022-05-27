<?php
trait Stock
{
    protected $stock_quantity;

    public function setNewSupply($stock_quantity)
    {
        $this->stock_quantity = $stock_quantity;
    }

    public function getStockQuantity()
    {
        return $this->stock_quantity;
    }
}
