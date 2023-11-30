<?php

namespace Products;

// Abstract class representing a generic Product
abstract class Product 
{
    // properti
    protected $name;
    protected $price;

    public function __construct($name, $price) // magic method: __contruct() diakses pada saat pembuatan object.
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function displayInfo(); // abstract method
}
