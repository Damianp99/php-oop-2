<?php
class Products
{
    public $price;
    public $brand;
    public $name;

    public function __construct($price, $name, $brand)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }
}
