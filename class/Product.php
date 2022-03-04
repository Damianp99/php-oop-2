<?php
require_once __DIR__ . '/Products.php';
class Product extends Products
{
    public $animal;

    public function __construct($id, $name, $price, $animal)
    {
        parent::__construct($id, $name, $price);

        $this->animal = $animal;
    }

    public function getName()
    {
        return parent::getName();
    }
}
